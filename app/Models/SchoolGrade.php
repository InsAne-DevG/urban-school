<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolGrade extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_id', 'grade_level_id', 'grade_section_id'
    ];

    public function gradeLevel(){
        return $this->hasOne(GradeLevel::class, 'id', 'grade_level_id');
    }

    public function gradeSection(){
        return $this->hasOne(GradeSection::class, 'id', 'grade_section_id');
    }
}
