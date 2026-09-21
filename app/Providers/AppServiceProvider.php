<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\{Gate,View,Cache};
use App\Models\{Foundation,School,Page,News,Achievement,Facility,Extracurricular,Program,Gallery,Admission,Statistic};
class AppServiceProvider extends ServiceProvider {
 public function register():void{}
 public function boot():void {
 foreach([Foundation::class,School::class,Page::class,News::class,Achievement::class,Facility::class,Extracurricular::class,Program::class,Gallery::class,Admission::class,Statistic::class] as $model)Gate::policy($model,\App\Policies\ContentPolicy::class);
 View::composer(['layouts.public','components.navbar','components.footer','components.inquiry-form'],function($view){
 $data=Cache::remember('portal.shared',300,fn()=>['foundation'=>Foundation::published()->first(),'schools'=>School::published()->orderBy('sort_order')->get()]);
 $view->with($data);
 });
 }
}
