<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;


    public function latestMarks()
    {
        return $this->hasOne(StudentHasSubject::class)->latestOfMany();
    }

    public function oldestMarks()
    {
        return $this->hasOne(StudentHasSubject::class)->oldestOfMany();
    }
}
