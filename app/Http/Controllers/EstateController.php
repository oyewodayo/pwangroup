<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estate;

class EstateController extends Controller
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
    public function create()
    {
        return view('estates.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'location' => 'required|max:255',
            'title' => 'required|max:255',
            'size' => 'required|max:255',
            'outright_price'=> 'required',
            'quantities'=> 'required',
            'description' => 'required|max:255',
            'flyer'=> 'mimes:png,jpg,webp,jpeg|max:5048',
            'art_design'=> 'mimes:png,jpg,webp,jpeg|max:5048',
            'subscription_form'=> 'mimes:png,jpg,webp,jpeg|max:5048'
        ]);

        if ($request->hasFile('flyer')) {
            $flyer_ext = $request->flyer->extension();
            $new_flyer_name = Str::snake($request->name).'.'.Str::uuid().$logo_ext;
            $flyer_path = $request->flyer->move('estatedesigns', '/'.$new_flyer_name, 'public');
        }


        if ($request->hasFile('art_design')) {
            $design_ext = $request->art_design->extension();
            $new_design_name = Str::uuid().'-'.Str::snake($request->name).'.'.$design_ext;
            $design_path = $request->art_design->move('affiliatedesign', '/'.$new_design_name, 'public');
        }

        if ($request->hasFile('subscription_form')) {
            $subscription_form_ext = $request->subscription_form->extension();
            $new_subscription_form_name = Str::uuid().'-'.Str::snake($request->name).'.'.$subscription_form_ext;
            $subscription_form_path = $request->subscription_form->move('affiliatedesign', '/'.$new_design_name, 'public');
        }

        

        // $file_path = url('/storage/platform/'.$new_file_name);

        $estates = Estate::create([
            'user_id'=>auth()->id(),
            'reference'=>Support::reference(),
            'name'=>$request->name,
            'location'=>$request->location,
            'title'=>$request->title,
            'size'=>$request->size,
            'outright_price'=>$request->outright_price,
            'description'=>$request->description,
            'quantities'=>$request->quantities,
            'phones->phone1'=>$request->phone,
            'flyer'=>$flyer_path??NULL,
            'art_design'=>$design_path??NULL,
            'subscription_form'=>$subscription_form_path??NULL
        ]);


        return back()->with('success','New event successfully created.');
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
