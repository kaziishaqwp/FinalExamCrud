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

public function create()
{
    return view('employees.create');
}

public function store(Request $request)
{
    // Validate request data
    $request->validate([
        // Validation rules
    ]);

    // Create new employee
    $employee = new Employee([
        // Assign attributes from request
    ]);
    $employee->save();

    return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
}

// Implement update, edit, destroy methods similarly

}
