<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\{Inquiry,Subscriber,School};
use App\Jobs\NotifyInquiry;
use Illuminate\Validation\Rule;
class InquiryController extends Controller {
 public function store(Request $request){
 $data=$request->validate(['name'=>'required|string|max:150','email'=>'required|email|max:255','phone'=>'nullable|string|max:30','message'=>'required|string|min:10|max:5000','type'=>'required|in:contact,tour','school_id'=>['nullable',Rule::exists('schools','id')->where('status','published')->whereNotNull('published_at')->where('published_at','<=',now())],'visit_date'=>'nullable|required_if:type,tour|date|after_or_equal:today','website'=>'nullable|max:0','consent'=>'accepted']);
 unset($data['website'],$data['consent']);$inquiry=Inquiry::create($data);NotifyInquiry::dispatch($inquiry->id);
 return back()->with('success','Pesan Anda telah tersimpan. Tim kami akan menindaklanjuti melalui kontak yang Anda berikan.');
 }
 public function subscribe(Request $request){$data=$request->validate(['email'=>'required|email|max:255','consent'=>'accepted','website'=>'nullable|max:0']);Subscriber::firstOrCreate(['email'=>strtolower($data['email'])],['consented_at'=>now()]);return back()->with('success','Alamat surel Anda tersimpan untuk buletin sekolah.');}
}
