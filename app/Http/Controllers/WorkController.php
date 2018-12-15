<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Job;

class WorkController extends Controller
{
    public function index()
    {
        $jobs = DB::table('jobs')->paginate(12);
        return view('jobs.index', compact('jobs'));
    }
    public function show($id)
    {
        $job = Job::find($id);
        return view('jobs.show', compact('job'));
    }
}
