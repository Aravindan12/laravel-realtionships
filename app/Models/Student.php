<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','name',
     ];

    public function latestMarks()
    {
        return $this->hasOne(StudentHasSubject::class, 'student_id', 'id')->latestOfMany();
    }

    public function oldestMarks()
    {
        return $this->hasOne(StudentHasSubject::class, 'student_id', 'id')->oldestOfMany();
    }

    public function Marks()
    {
        return $this->hasOne(StudentHasSubject::class, 'student_id', 'id');
    }
}
