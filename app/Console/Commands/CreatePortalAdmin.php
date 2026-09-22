<?php
namespace App\Console\Commands;
use App\Models\{User,School};
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
class CreatePortalAdmin extends Command {
 protected $signature='portal:admin';
 protected $description='Buat akun admin dengan role dan lingkup sekolah, tanpa password default';
 public function handle():int {
 $name=$this->ask('Nama lengkap');$email=$this->ask('Email');
 $role=$this->choice('Role',['super_admin','foundation_admin','school_admin']);$schoolId=null;
 if($role==='school_admin'){$schools=School::orderBy('sort_order')->pluck('title','id')->all();if(!$schools){$this->error('Belum ada sekolah.');return self::FAILURE;}$selected=$this->choice('Sekolah',array_values($schools));$schoolId=array_search($selected,$schools,true);}
 $password=$this->secret('Password (minimal 12 karakter, huruf besar/kecil dan angka)');
 $confirmation=$this->secret('Ulangi password');
 $data=['name'=>$name,'email'=>$email,'password'=>$password,'password_confirmation'=>$confirmation,'role'=>$role,'school_id'=>$schoolId];
 $validation=Validator::make($data,['name'=>'required|string|max:255','email'=>'required|email|max:255|unique:users,email','password'=>['required','confirmed',Password::min(12)->mixedCase()->numbers()],'role'=>'required|in:super_admin,foundation_admin,school_admin','school_id'=>'nullable|exists:schools,id']);
 if($validation->fails()){foreach($validation->errors()->all() as $error)$this->error($error);return self::FAILURE;}
 unset($data['password_confirmation']);User::create($data);$this->info('Akun admin berhasil dibuat. Masuk melalui /admin.');return self::SUCCESS;
 }
}
