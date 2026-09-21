<?php
namespace App\Models;
class School extends Content { protected $table='schools'; public function facilities(){return $this->belongsToMany(Facility::class);} public function programs(){return $this->belongsToMany(Program::class);} public function extracurriculars(){return $this->belongsToMany(Extracurricular::class);} }
