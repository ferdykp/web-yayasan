<?php
namespace App\Policies;
use App\Models\{Inquiry,User};
class InquiryPolicy {
 public function viewAny(User $user):bool{return $user->canAccessPanel(\Filament\Facades\Filament::getPanel('admin'));}
 public function view(User $user,Inquiry $inquiry):bool{return $this->viewAny($user)&&($user->role==='super_admin'||($user->role==='foundation_admin'&&$inquiry->school_id===null)||($user->role==='school_admin'&&$inquiry->school_id===$user->school_id));}
 public function update(User $user,Inquiry $inquiry):bool{return $this->view($user,$inquiry);}
 public function create(User $user):bool{return false;}
 public function delete(User $user,Inquiry $inquiry):bool{return false;}
 public function deleteAny(User $user):bool{return false;}
}
