<?php
namespace App\Console\Commands;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class BackupPortalDatabase extends Command {
 protected $signature='portal:backup';
 protected $description='Buat snapshot SQLite konsisten di storage/app/private/backups';
 public function handle():int {
 $connection=DB::connection();
 if($connection->getDriverName()!=='sqlite'){$this->error('Gunakan backup native terjadwal dari penyedia MySQL/PostgreSQL untuk koneksi ini.');return self::FAILURE;}
 $directory=storage_path('app/private/backups');
 if(!is_dir($directory)&&!mkdir($directory,0700,true)&&!is_dir($directory)){$this->error('Direktori backup tidak dapat dibuat.');return self::FAILURE;}
 $path=$directory.'/portal-'.now()->format('Ymd-His').'-'.Str::random(8).'.sqlite';
 $pdo=$connection->getPdo();$pdo->exec('VACUUM INTO '.$pdo->quote($path));chmod($path,0600);
 $this->info('Backup dibuat: '.$path);return self::SUCCESS;
 }
}
