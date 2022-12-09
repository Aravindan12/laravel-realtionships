<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class StudentHasSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student_subject')->insert([
            [
                'student_id' => 1,
                'subject_id' => 1,
                'marks' => 11,
                'created_at' => Carbon::now()->subDays(1)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'student_id' => 2,
                'subject_id' => 1,
                'marks' => 21,
                'created_at' => Carbon::now()->subDays(2)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'student_id' => 3,
                'subject_id' => 1,
                'marks' => 31,
                'created_at' => Carbon::now()->subDays(3)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'student_id' => 4,
                'subject_id' => 1,
                'marks' => 41,
                'created_at' => Carbon::now()->subDays(4)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'student_id' => 5,
                'subject_id' => 1,
                'marks' => 51,
                'created_at' => Carbon::now()->subDays(5)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'student_id' => 1,
                'subject_id' => 2,
                'marks' => 12,
                'created_at' => Carbon::now()->subDays(6)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'student_id' => 2,
                'subject_id' => 2,
                'marks' => 22,
                'created_at' => Carbon::now()->subDays(7)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'student_id' => 3,
                'subject_id' => 2,
                'marks' => 32,
                'created_at' => Carbon::now()->subDays(8)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'student_id' => 4,
                'subject_id' => 2,
                'marks' => 42,
                'created_at' => Carbon::now()->subDays(9)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'student_id' => 5,
                'subject_id' => 2,
                'marks' => 52,
                'created_at' => Carbon::now()->subDays(10)->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
