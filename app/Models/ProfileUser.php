<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'state_id',
        'city_id',
        'address',
        'user_id',
        'image',
        'unique_id'
    ];

    protected $appends = ['image_url'];

  
    public function getImageUrlAttribute()
    {
        // Concatenate the directory and filename
        $fullPath = 'school/' . $this->image;

        $url = asset($fullPath);

        return $url;
    }
}
