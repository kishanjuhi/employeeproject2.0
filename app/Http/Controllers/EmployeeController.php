<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
{
$employees = Employee::all();
return view('employees.index', compact('employees'));
}
}