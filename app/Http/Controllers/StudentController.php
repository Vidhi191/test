<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;




class StudentController extends Controller
{

    function showView(){

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,email',
            'phone' => 'required',
            'rollnumber' => 'required|unique:students,rollnumber',
        ]);

        $student = new Student;
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->phone = $request->input('phone');
        $student->rollnumber = $request->input('rollnumber');
        $student->save();

        return redirect()->route('student.index')->with('success', 'Student added successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::findOrFail($id);

        return view('student.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::find($id);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,email,' . $student->id,
            'phone' => 'required',
            'rollnumber' => 'required|unique:students,rollnumber,' . $student->id,
        ]);

        $student->update($request->all());

        return redirect()->route('student.index')->with('success', 'Student updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('student.index')
            ->with('success', 'student deleted successfully.');  
                        
    }
}
