<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reading;
use Illuminate\Support\Facades\Validator;

class ReadingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexApi() {
        return response()->json(Reading::all());
    }
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming data
        $validated = $request->validate([
            'voltage' => 'required|numeric',
            'current' => 'required|numeric',
        ]);

        // Create a new Reading instance and set properties
        $reading = new Reading();
        $reading->voltage = $validated['voltage'];
        $reading->current = $validated['current'];
    
        // Save the Reading instance to the database
        $reading->save();
    
        // Return success response
        return response()->json(['success' => 'Data saved successfully'], 200);
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
