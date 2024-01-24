<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Flyer;

class FlyersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $flyers = Flyer::where('status',1)->get();
        return view('backoffice.flyers.index', compact('flyers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backoffice.flyers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'max:150',
            'flyer_path'=> 'mimes:png,jpg,webp,jpeg|max:8048'
        ]);

        if ($request->hasFile('flyer_path')) {
            $flyer_ext = $request->flyer_path->extension();
            $name = $request->flyer_path->getClientOriginalName();
            $flyer_name = Str::uuid().'.'.$flyer_ext;
            $flyer_path = $request->flyer_path->move('downloads', '/'.$flyer_name, 'public');
        }
        
        $flyer = Flyer::create([
            'user_id'=>auth()->id(),
            'name'=>$name,
            'type'=>$request->type,
            'flyer_path'=>$flyer_path??NULL,
        ]);


        return back()->with('success','New flyer successfully uploaded.');
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
     * Update status the specified resource in storage.
     */
    public function status(Request $request, string $id)
    {
        $flyer = Flyer::find($id);

        if($flyer->status == 1){

            $flyer->update(['status'=>0]);
            return back()->with('success','Selected flyer successfully disabled.');
        }
        else{
            $flyer->update(['status'=>1]);
            return back()->with('success','Selected flyer successfully enabled.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $flyer = Flyer::find($id);

        $flyer->delete();

        return back()->with('success','Selected flyer successfully deleted.');
    }
}
