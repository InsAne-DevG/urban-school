<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradeSection extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'grade_section_name'
    ];
}
