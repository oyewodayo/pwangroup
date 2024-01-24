<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inspection;

class InspectionController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (is_null($request->firstname) && is_null($request->lastname)  ) {

            return response()->json(['error'=>true,'message'=>'Please provide your firstname and your lastname']);

        }

        if (is_null($request->email) && is_null($request->phone)  ) {

            return response()->json(['error'=>true,'message'=>'Please provide your email and your phone number']);

        }

        if (is_null($request->inspection_date)) {

            return response()->json(['error'=>true,'message'=>'Please provide your email and your phone number']);

        }

        Inspection::create([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'estate_id'=>$request->estate_id,
            'referee'=>$request->referee,
            'inspection_date'=>$request->inspection_date,
            'inspection_time'=>$request->inspection_time,
        ]);

        return response()->json(['error'=>false,'message'=>'Inspection booking successfully submitted. We will get in touch with you shortly.']);
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
