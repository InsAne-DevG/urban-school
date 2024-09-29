<?php

namespace Database\Seeders;

use App\Models\GradeLevel;
use App\Models\GradeSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradeLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gradeLevels = config('global_data.grade_levels');
        $gradeSections = config('global_data.grade_sections');
        foreach($gradeLevels as $gradeLevel) {
            if(!GradeLevel::where('grade_level_name', $gradeLevel)->exists()){
                GradeLevel::create([
                    'grade_level_name' => $gradeLevel
                ]);
            }
        }
        foreach($gradeSections as $gradeSection) {
            if(!GradeSection::where('grade_section_name', $gradeSection)->exists()){
                GradeSection::create([
                    'grade_section_name' => $gradeSection
                ]);
            }
        }
    }
}
