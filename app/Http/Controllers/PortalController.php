<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\{Page,School,Foundation,News,Achievement,Program,Facility,Gallery,Admission,Extracurricular,Statistic};
class PortalController extends Controller {
 const LISTS=['news'=>News::class,'achievements'=>Achievement::class,'academic'=>Program::class,'facilities'=>Facility::class,'gallery'=>Gallery::class];
 public function page(Request $request,string $key='home') {
 $page=Page::published()->where('slug',$key)->firstOrFail();
 $items=null;$categories=[];$school=null;
 if(isset(self::LISTS[$key])){
  $model=self::LISTS[$key];$query=$model::published()->with('school');
  $categories=$model::published()->get()->pluck('data.category')->filter()->unique()->values();
  $request->validate(['school'=>'nullable|in:sd,smp,sma','q'=>'nullable|string|max:150','category'=>'nullable|string|max:100','year'=>'nullable|integer|min:1900|max:2200']);
  if($level=$request->query('school'))$query->where(function($q)use($level,$model){$q->whereHas('school',fn($s)=>$s->where('slug',$level));if(in_array($model,[Facility::class,Program::class]))$q->orWhereHas('schools',fn($s)=>$s->where('slug',$level));});
  if($category=$request->query('category'))$query->where('data->category',$category);
  if($year=$request->query('year'))$query->where('data->year',(int)$year);
  if($term=$request->query('q'))$query->where(fn($q)=>$q->where('title','like','%'.$term.'%')->orWhere('description','like','%'.$term.'%'));
  $items=$query->orderBy('sort_order')->orderByDesc('published_at')->paginate(12);
 }
 if(in_array($key,['sd','smp','sma']))$school=School::published()->where('slug',$key)->firstOrFail();
 return view('pages.'.$key,compact('page','items','categories','school'));
 }
 public function detail(string $kind,string $slug){
 $model=match($kind){'berita'=>News::class,'prestasi'=>Achievement::class,'program'=>Program::class,'fasilitas'=>Facility::class,'galeri'=>Gallery::class,'ekstrakurikuler'=>Extracurricular::class};
 $item=$model::published()->with('school')->where('slug',$slug)->firstOrFail();
 return view('pages.detail',compact('item','kind'));
 }
 public function admission(string $school){
 $unit=School::published()->where('slug',$school)->firstOrFail();
 $item=Admission::published()->where('school_id',$unit->id)->orderByDesc('published_at')->firstOrFail();
 return view('pages.admission',compact('item','unit'));
 }
 public function about(string $section){abort_unless(in_array($section,['sejarah','visi-misi','struktur-organisasi','sambutan']),404);return view('pages.foundation', ['item'=>Foundation::published()->firstOrFail(),'section'=>$section]);}
 public function search(Request $request){
 $request->validate(['q'=>'nullable|string|max:150']);$term=trim($request->query('q',''));$results=collect();
 if(mb_strlen($term)>=2)foreach([News::class,Achievement::class,Program::class,School::class] as $model)$results=$results->merge($model::published()->where(fn($q)=>$q->where('title','like','%'.$term.'%')->orWhere('description','like','%'.$term.'%')->orWhere('content','like','%'.$term.'%'))->limit(20)->get());
 return view('pages.search',compact('term','results'));
 }
 public function sitemap(){
 $urls=Page::published()->get()->reject(fn($p)=>$p->slug==='article')->map(fn($p)=>url($p->data['route']));
 foreach([News::class,Achievement::class,Program::class,School::class,Facility::class,Gallery::class,Extracurricular::class,Admission::class] as $model)$urls=$urls->merge($model::published()->get()->map->public_url);
 foreach(['sejarah','visi-misi','struktur-organisasi','sambutan'] as $section)$urls->push(url('/tentang/'.$section));
 return response()->view('sitemap',['urls'=>$urls->unique()])->header('Content-Type','application/xml');
 }
}
