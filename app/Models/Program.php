<?php
namespace App\Models;
class Program extends Content { protected $table='programs'; public function schools(){return $this->belongsToMany(School::class); } }
