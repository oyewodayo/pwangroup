<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Affiliate;
use App\Services\Support;

class AffiliateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $affiliates = Affiliate::latest()->get();

        return view('affiliates.index',compact('affiliates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('affiliates.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'website' => 'required|max:255',
            'phone' => 'required|max:255',
            'logo'=> 'mimes:png,jpg,webp,jpeg|max:5048',
            'art_design'=> 'mimes:png,jpg,webp,jpeg|max:5048'
        ]);

        if ($request->hasFile('logo')) {
            $logo_ext = $request->logo->extension();
            $new_logo_name = Str::uuid().'-'.Str::snake($request->name).'.'.$logo_ext;
            $logo_path = $request->logo->move('affiliatedesign', '/'.$new_logo_name, 'public');
        }


        if ($request->hasFile('art_design')) {
            $design_ext = $request->art_design->extension();
            $new_design_name = Str::uuid().'-'.Str::snake($request->name).'.'.$design_ext;
            $design_path = $request->art_design->move('affiliatedesign', '/'.$new_design_name, 'public');
        }

        

        // $file_path = url('/storage/platform/'.$new_file_name);

        $event = Affiliate::create([
            'user_id'=>auth()->id(),
            'reference'=>Support::reference(),
            'name'=>$request->name,
            'description'=>$request->description,
            'website'=>$request->website,
            'phones->phone1'=>$request->phone,
            'logo'=>$logo_path??NULL,
            'art_design'=>$design_path??NULL,
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
