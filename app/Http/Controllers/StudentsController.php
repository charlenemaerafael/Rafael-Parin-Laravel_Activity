<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view("students.index", compact("students"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("students.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
           'name' => 'required|string|max:255',
           'email' => 'required|string|email|max:255|unique:students',
           'age' => 'required|integer|min:1', 
        ]);
        Student::create($validate);
        return redirect()->route('students.index')->with('success','Student Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::find($id);
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findorFail($id);
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $validate = $request->validate([
        'name' => 'sometimes|required|string|max:255',
        'email' => 'sometimes|required|string|email|max:255|unique:students,email,' . $id, // Corrected rule
        'age' => 'sometimes|required|integer|min:1',
    ]);

    $student = Student::findOrFail($id);
    $student->update($validate);
    return redirect()->route('students.index')->with('success', 'Student Updated Successfully.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::findorFail($id);
        $student->delete();
        return redirect()->route('students.index')->with('success','Student Deleted Successfully.');
    }
}
