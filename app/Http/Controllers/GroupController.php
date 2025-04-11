<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('groups.index', ['groups' => Group::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('groups.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Group::create([
            'title' => $request->title,
            'start_from' => $request->start_from,
            'is_active' => $request->is_active ? true : false
        ]);
        return redirect('/groups');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $group = Group::where('id', $id)->first();
        $students = Student::where('group_id', $id)->get();
        return view('groups.show', ['group' => $group, 'students' => $students]);
    }
}
