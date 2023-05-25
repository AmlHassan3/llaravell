<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['username' , 'password' , 'academic_number','subject_id'];

    public function subject(){
        return $this->hasOne(Subject::class,'id','subject_id');
    }
}
