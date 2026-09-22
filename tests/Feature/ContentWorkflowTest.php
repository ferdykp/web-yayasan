<?php
namespace Tests\Feature;
use App\Models\{User,School,News,Facility,Page,Gallery,Admission};
use App\Support\ContentWrite;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Queue;
use Livewire\Livewire;
use Tests\TestCase;
class ContentWorkflowTest extends TestCase {
 use RefreshDatabase;
 protected function setUp():void{parent::setUp();$this->seed();}
 public function test_school_admin_cannot_read_or_edit_other_school_content():void {
 $sd=School::where('slug','sd')->first();$smp=School::where('slug','smp')->first();
 $user=User::factory()->create(['role'=>'school_admin','school_id'=>$sd->id]);$this->actingAs($user);
 $own=News::where('school_id',$sd->id)->first();$other=News::where('school_id',$smp->id)->first();
 $this->assertTrue($user->can('update',$own));$this->assertFalse($user->can('update',$other));
 $this->assertEquals([$own->id],News::forAdmin($user)->pluck('id')->all());
 $this->get(\App\Filament\Resources\NewsResource::getUrl('edit',['record'=>$other]))->assertNotFound();
 $this->assertEquals($sd->id,ContentWrite::prepare(['school_id'=>$smp->id],News::class,$own)['school_id']);
 }
 public function test_foundation_admin_only_manages_global_content():void {
 $user=User::factory()->create(['role'=>'foundation_admin']);$this->actingAs($user);
 $this->assertTrue($user->can('update',News::whereNull('school_id')->first()));
 $this->assertFalse($user->can('update',News::whereNotNull('school_id')->first()));
 $this->assertNull(ContentWrite::prepare(['school_id'=>School::first()->id],News::class)['school_id']);
 }
 public function test_unpublished_and_future_news_do_not_leak_into_public_endpoints():void {
 foreach(['draft','archived','future'] as $state){$news=News::create(['title'=>'Rahasia unik '.$state,'slug'=>'rahasia-'.$state,'status'=>$state==='future'?'published':$state,'published_at'=>$state==='future'?now()->addDay():now()->subDay()]);
 $this->get('/berita/'.$news->slug)->assertNotFound();$this->get('/berita')->assertDontSee($news->title);$this->get('/cari?q=Rahasia')->assertDontSee($news->title);$this->get('/sitemap.xml')->assertDontSee($news->public_url);}
 }
 public function test_filters_and_shared_facilities_use_database_relationships():void {
 $school=School::where('slug','sd')->first();$facility=Facility::first();$facility->schools()->sync([$school->id]);
 $this->get('/fasilitas?school=sd')->assertOk()->assertViewHas('items',fn($items)=>$items->contains('id',$facility->id));
 $this->get('/fasilitas?school=smp')->assertOk()->assertViewHas('items',fn($items)=>!$items->contains('id',$facility->id));
 $this->get('/berita?school=sd')->assertViewHas('items',fn($items)=>$items->every(fn($item)=>$item->school_id===$school->id));
 }
 public function test_inquiry_is_persisted_and_notification_queued():void {
 Queue::fake();$this->post('/kontak',['name'=>'Orang Tua','email'=>'parent@example.test','message'=>'Mohon informasi jadwal kunjungan.','type'=>'contact','consent'=>1])->assertRedirect()->assertSessionHas('success');
 $this->assertDatabaseHas('inquiries',['email'=>'parent@example.test','status'=>'new']);Queue::assertPushed(\App\Jobs\NotifyInquiry::class);
 }
 public function test_inquiry_rejects_spam_missing_consent_and_past_tour_date():void {
 $this->post('/kontak',['name'=>'Orang Tua','email'=>'parent@example.test','message'=>'Mohon informasi sekolah.','type'=>'tour','visit_date'=>now()->subDay()->toDateString(),'website'=>'spam'])->assertSessionHasErrors(['consent','website','visit_date']);$this->assertDatabaseCount('inquiries',0);
 }
 public function test_newsletter_consent_is_required_and_email_is_deduplicated():void {
 $this->post('/newsletter',['email'=>'parent@example.test'])->assertSessionHasErrors('consent');
 foreach(['parent@example.test','PARENT@example.test'] as $email)$this->post('/newsletter',['email'=>$email,'consent'=>1])->assertSessionHas('success');$this->assertDatabaseCount('subscribers',1);
 }
 public function test_cms_can_save_news_and_preserve_card_metadata():void {
 $this->actingAs(User::factory()->create(['role'=>'super_admin']));$news=News::first();$copy=$news->data['copy'];$image=$news->image;
 Livewire::test(\App\Filament\Resources\NewsResource\Pages\EditRecord::class,['record'=>$news->getRouteKey()])->fillForm(['title'=>'Berita diperbarui dari CMS'])->call('save')->assertHasNoFormErrors();
 $this->assertSame('Berita diperbarui dari CMS',$news->fresh()->title);$this->assertSame($copy,$news->fresh()->data['copy']);$this->assertSame($image,$news->fresh()->image);
 }
 public function test_school_admin_cannot_attach_facility_to_other_school():void {
 $sd=School::where('slug','sd')->first();$smp=School::where('slug','smp')->first();$this->actingAs(User::factory()->create(['role'=>'school_admin','school_id'=>$sd->id]));
 Livewire::test(\App\Filament\Resources\FacilityResource\Pages\CreateRecord::class)->fillForm(['title'=>'Fasilitas SD','slug'=>'fasilitas-sd','status'=>'draft','sort_order'=>0,'schools'=>[$smp->id]])->call('create')->assertHasFormErrors()->assertHasErrors(['data.schools.0']);
 $this->assertDatabaseMissing('facilities',['slug'=>'fasilitas-sd']);
 }

 public function test_cms_preserves_page_route_and_media_when_updating_copy():void {
 $this->actingAs(User::factory()->create(['role'=>'super_admin']));$page=Page::where('slug','home')->first();$images=$page->data['images'];$copy=$page->data['copy'];$copy['text_1']='Teks dari CMS';
 Livewire::test(\App\Filament\Resources\PageResource\Pages\EditRecord::class,['record'=>$page->id])->fillForm(['data.copy'=>$copy])->call('save')->assertHasNoFormErrors();
 $this->assertSame('/',$page->fresh()->data['route']);$this->assertSame($images,$page->fresh()->data['images']);$this->get('/')->assertSee('Teks dari CMS');$this->get('/sitemap.xml')->assertOk();
 }
 public function test_school_admin_can_create_a_facility_for_own_school():void {
 $sd=School::where('slug','sd')->first();$this->actingAs(User::factory()->create(['role'=>'school_admin','school_id'=>$sd->id]));
 Livewire::test(\App\Filament\Resources\FacilityResource\Pages\CreateRecord::class)->fillForm(['title'=>'Ruang baru','slug'=>'ruang-baru','status'=>'draft','sort_order'=>0,'schools'=>[$sd->id]])->call('create')->assertHasNoFormErrors();
 $record=Facility::where('slug','ruang-baru')->firstOrFail();$this->assertEquals($sd->id,$record->school_id);$this->assertEquals([$sd->id],$record->schools->pluck('id')->all());
 }
 public function test_gallery_cms_preserves_existing_photos():void {
 $this->actingAs(User::factory()->create(['role'=>'super_admin']));$gallery=Gallery::first();$photos=$gallery->data['photos'];
 Livewire::test(\App\Filament\Resources\GalleryResource\Pages\EditRecord::class,['record'=>$gallery->id])->fillForm(['title'=>'Album diperbarui'])->call('save')->assertHasNoFormErrors();
 $this->assertSame($photos,$gallery->fresh()->data['photos']);$this->get('/galeri/'.$gallery->slug)->assertSee($photos[0],false);
 }
}
