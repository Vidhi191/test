<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class InsertController extends Controller
{
    public function showView()
    {
        return view('addstudent');
    }
    public function insertNewStudent(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:students',
            'phone' => 'required|string|max:15',
            'rollnumber' => 'required|string|max:50',

        ]);


        DB::table('students')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'rollnumber' => $request->rollnumber,
        ]);
return $validatedData;

        
        return redirect()->route('students.create')->with('success', 'student added successfully!');

    }

}