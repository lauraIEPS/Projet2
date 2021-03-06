<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\Course;

class Courses extends Controller
{
    /** 
     *   Return tous les cours au format json
     */
    public function index() {
        return response()->json(Course::all());
    }
}