<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Group;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(Group $group)
    {
        return view('students.create', ['group' => $group]);
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
    public function show(string $group, Student $student)
    {
        $group_title = $student->group->title;
        return view('students.show', ['student' => $student, 'group_title' => $group_title]);
    }
}
