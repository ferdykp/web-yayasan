<?php
namespace App\Policies;
use App\Models\{User,Content,Foundation,School,Page};
class ContentPolicy {
 public function viewAny(User $u):bool{return in_array($u->role,['super_admin','foundation_admin','school_admin']);}
 public function view(User $u,Content $record):bool{return $record->newQuery()->forAdmin($u)->whereKey($record->id)->exists();}
 public function create(User $u):bool{return $this->viewAny($u);}
 public function update(User $u,Content $record):bool{return $this->view($u,$record);}
 public function delete(User $u,Content $record):bool{return !($record instanceof Foundation||$record instanceof School||$record instanceof Page)&&$this->view($u,$record);}
 public function deleteAny(User $u):bool{return false;}
 public function restore(User $u,Content $record):bool{return false;}
 public function forceDelete(User $u,Content $record):bool{return false;}
}
