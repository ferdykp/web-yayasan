<?php
namespace App\Models;
class Facility extends Content { protected $table='facilities'; public function schools(){return $this->belongsToMany(School::class); } }
