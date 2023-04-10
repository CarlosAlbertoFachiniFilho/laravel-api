<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobsController extends Controller
{
    public function index() {
        $jobs = Job::with('company')->get();
        return response()->json($jobs);
    //    echo 'Jobs!';
    }
}
