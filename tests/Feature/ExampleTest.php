<?php
namespace Tests\Feature;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
class ExampleTest extends TestCase {
 use RefreshDatabase;
 public function test_all_public_pages_render_with_seeded_content():void {
 $this->seed();
 foreach(['/', '/tentang','/tentang/sejarah','/tentang/visi-misi','/tentang/struktur-organisasi','/tentang/sambutan','/sekolah','/sekolah/sd','/sekolah/smp','/sekolah/sma','/akademik','/berita','/berita/inquiry-adab','/prestasi','/fasilitas','/galeri','/ppdb','/ppdb/sd','/ppdb/smp','/ppdb/sma','/kontak','/cari?q=sekolah','/sitemap.xml','/robots.txt','/admin/login'] as $url){$this->get($url)->assertOk();}
 }
 public function test_super_admin_can_open_all_content_forms():void {
 $this->seed();$user=\App\Models\User::factory()->create(['role'=>'super_admin']);$this->actingAs($user);
 foreach(['Foundation','School','Page','News','Achievement','Facility','Extracurricular','Program','Gallery','Admission','Statistic'] as $model){$resource='App\\Filament\\Resources\\'.$model.'Resource';$class='App\\Models\\'.$model;$this->get($resource::getUrl('index'))->assertOk();$this->get($resource::getUrl('edit',['record'=>$class::first()]))->assertOk();}
 }
}
