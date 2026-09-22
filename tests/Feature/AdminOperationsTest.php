<?php
namespace Tests\Feature;
use App\Models\{User,School,Inquiry,Subscriber,News,Gallery,Admission};
use App\Filament\Resources\{InquiryResource,SubscriberResource};
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\{Mail,Queue};
use Livewire\Livewire;
use Filament\Actions\EditAction;
use Tests\TestCase;
class AdminOperationsTest extends TestCase {
 use RefreshDatabase;
 protected function setUp():void{parent::setUp();$this->seed();}
 public function test_inbox_is_scoped_by_school_and_can_update_follow_up_status():void {
 $sd=School::where('slug','sd')->first();$smp=School::where('slug','smp')->first();
 $own=Inquiry::create(['school_id'=>$sd->id,'name'=>'Wali SD','email'=>'sd@example.test','message'=>'Permintaan informasi SD']);
 $other=Inquiry::create(['school_id'=>$smp->id,'name'=>'Wali SMP','email'=>'smp@example.test','message'=>'Permintaan informasi SMP']);
 $user=User::factory()->create(['role'=>'school_admin','school_id'=>$sd->id]);$this->actingAs($user);
 $this->get(InquiryResource::getUrl())->assertOk()->assertSee('sd@example.test')->assertDontSee('smp@example.test');
 $this->assertTrue($user->can('update',$own));$this->assertFalse($user->can('update',$other));
 Livewire::test(InquiryResource\Pages\ListInquiries::class)->callTableAction(EditAction::class,$own,data:['status'=>'resolved'])->assertHasNoTableActionErrors();
 $this->assertSame('resolved',$own->fresh()->status);
 }
 public function test_subscriber_list_is_restricted_to_foundation_staff():void {
 Subscriber::create(['email'=>'subscriber@example.test','consented_at'=>now()]);
 $this->actingAs(User::factory()->create(['role'=>'school_admin','school_id'=>School::first()->id]));$this->get(SubscriberResource::getUrl())->assertForbidden();
 $this->actingAs(User::factory()->create(['role'=>'foundation_admin']));$this->get(SubscriberResource::getUrl())->assertOk()->assertSee('subscriber@example.test');
 }
 public function test_viewer_and_school_admin_without_school_cannot_access_panel():void {
 foreach([['role'=>'viewer'],['role'=>'school_admin','school_id'=>null]] as $attributes){$this->actingAs(User::factory()->create($attributes));$this->get('/admin')->assertForbidden();}
 }
 public function test_photo_path_cannot_be_replaced_with_another_stored_file():void {
 $this->actingAs(User::factory()->create(['role'=>'super_admin']));$news=News::first();$image=$news->image;
 Livewire::test(\App\Filament\Resources\NewsResource\Pages\EditRecord::class,['record'=>$news->id])->fillForm(['image'=>['media/not-authorized.jpg']])->call('save')->assertHasFormErrors(['image']);$this->assertSame($image,$news->fresh()->image);
 }
 public function test_admission_public_url_uses_school_slug_not_record_slug():void {
 $admission=Admission::where('slug','sd')->first();$admission->update(['slug'=>'sd-2027-2028']);$this->assertSame(url('/ppdb/sd'),$admission->public_url);$this->get('/ppdb/sd')->assertOk();
 }
 public function test_notification_uses_configured_recipient_without_sending_real_mail():void {
 Mail::fake();config(['services.portal.inquiry_email'=>null]);$inquiry=Inquiry::create(['name'=>'Wali','email'=>'parent@example.test','message'=>'Informasi pendaftaran.']);(new \App\Jobs\NotifyInquiry($inquiry->id))->handle();Mail::assertNothingSent();
 }
 public function test_contact_rate_limit_is_enforced():void {
 Queue::fake();$data=['name'=>'Wali','email'=>'parent@example.test','message'=>'Informasi pendaftaran sekolah.','type'=>'contact','consent'=>1];
 for($i=0;$i<5;$i++)$this->post('/kontak',$data)->assertRedirect();$this->post('/kontak',$data)->assertStatus(429);$this->assertDatabaseCount('inquiries',5);
 }
}
