<?php
namespace App\Jobs;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;
use App\Models\Inquiry;
class NotifyInquiry implements ShouldQueue {
 use Queueable;
 public int $tries=3;
 public function __construct(public int $inquiryId){}
 public function handle():void {
 $inquiry=Inquiry::find($this->inquiryId);$recipient=config('services.portal.inquiry_email');
 if(!$inquiry||!$recipient)return;
 Mail::raw("Pesan baru dari {$inquiry->name}\nEmail: {$inquiry->email}\nTelepon: {$inquiry->phone}\n\n{$inquiry->message}",fn($message)=>$message->to($recipient)->subject('Pesan baru website Harapan Mulia')->replyTo($inquiry->email,$inquiry->name));
 }
}
