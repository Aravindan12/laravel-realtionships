<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentHasSubject extends Model
{
    use HasFactory;

    protected $table = 'student_subject';
    protected $hidden = ['id'];
    protected $fillable = [
        'subject_id','marks',
     ];

    public function Subject()
    {
        return $this->belongsTo(Student::class);
    }

    public function Students()
    {
        return $this->hasOne(Subject::class);
    }
}
