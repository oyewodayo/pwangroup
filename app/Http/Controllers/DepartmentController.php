<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Services\Support;
use App\Models\User;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::with(['staff'])->latest()->get();
        $department_id = request()->slug;

        $staffs = User::where('department_id',$department_id)->get();
        return view('department.index',compact('departments','staffs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('department.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255|unique:departments,name',
            'description' => 'required|max:255'
        ]);
        

        $event = Department::create([
            'user_id'=>auth()->id(),
            'reference'=>Support::reference(),
            'name'=>$request->name,
            'slug'=>Str::slug($request->name),
            'description'=>$request->description,
        ]);


        return back()->with('success','New department successfully created.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
