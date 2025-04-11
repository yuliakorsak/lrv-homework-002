<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Group;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $group)
    {

        return view('students.create', ['group' => Group::where('id', $group)->first()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $group)
    {
        Student::create([
            'group_id' => $group,
            'name' => $request->name,
            'surname' => $request->surname
        ]);
        return redirect('/groups/' . $group);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $group, string $student)
    {
        $student = Student::where('id', $student)->first();
        $group_title = Group::where('id', $group)->first()->title;
        return view('students.show', ['student' => $student, 'group_title' => $group_title]);
    }
}
