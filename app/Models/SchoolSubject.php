<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolSubject extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_id', 'subject_id', 'subject_code'
    ];

    public function subject(){
        return $this->hasOne(Subject::class, 'id', 'subject_id');
    }
}
