<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $gradeLevels = config('global_data.grade_levels');
        dd($gradeLevels);
    }
}
