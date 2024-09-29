<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $globalSubjects = config('global_data.subjects');

        foreach($globalSubjects as $subject){
            if(!Subject::where('name', $subject)->exists()){
                Subject::create([
                    'name' => $subject
                ]);
            }
        }
    }
}
