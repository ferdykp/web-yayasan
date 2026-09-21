<?php
namespace App\Models;
class Extracurricular extends Content { protected $table='extracurriculars'; public function schools(){return $this->belongsToMany(School::class); } }
