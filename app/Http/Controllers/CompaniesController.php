<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function index() {
        $companies = Company::all();
        return response()->json($companies);
    }
}
