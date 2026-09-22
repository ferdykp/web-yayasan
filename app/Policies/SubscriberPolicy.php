<?php
namespace App\Policies;
use App\Models\{Subscriber,User};
class SubscriberPolicy {
 public function viewAny(User $user):bool{return in_array($user->role,['super_admin','foundation_admin']);}
 public function view(User $user,Subscriber $subscriber):bool{return $this->viewAny($user);}
 public function create(User $user):bool{return false;}
 public function update(User $user,Subscriber $subscriber):bool{return false;}
 public function delete(User $user,Subscriber $subscriber):bool{return $this->viewAny($user);}
 public function deleteAny(User $user):bool{return false;}
}
