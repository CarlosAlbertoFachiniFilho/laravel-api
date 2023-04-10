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

    public function show($id) {
        $job = Job::with('company')->find($id);
        if(!$job) {
            return response()->json([
                'message'=> 'Record not found!',
            ],404);
        }

        return response()->json($job);

    }

    public function store(Request $request) {
        $job = new Job();
        $job->fill($request->all());
        $job->save();

        return response()->json($job, 201);
    }
}
