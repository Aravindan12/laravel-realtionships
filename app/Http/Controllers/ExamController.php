<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\StudentDetails;
use App\Models\Subject;

class ExamController extends Controller
{
    public function getMarks()
    {
        $dd=StudentDetails::all();
        dd($dd);
        $dd = Student::query()
        ->with(['Marks' => function ($query) {
            $query->select('marks');
        }])->get()->toArray();
        dd($dd);
    }
}
