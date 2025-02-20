<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reading;

class ReadingController extends Controller
{
    // Show Readings Index Page
    public function showIndex()
    {
        return view('index');
    }

    // Show Create New Readings Page
    public function create()
    {
        return view('create');
    }

    // Show Edit Reading Page
    public function edit($id)
    {

        $reading = Reading::findOrFail($id);
        return view('edit', ['reading' => $reading]);
    }

    // ==================== API METHODS ====================

    // Fetch all readings (API)
    public function getReadings()
    {
        return response()->json(Reading::all());
    }

    // Store a new reading (API)
    public function storeReading(Request $request)
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

    // Edit a reading (API)
    public function editReading(Request $request)
    {

        $reading = Reading::findOrFail($request->id);

        $validated = $request->validate([
            'voltage' => 'required|numeric',
            'current' => 'required|numeric',
        ]);

        $reading->voltage = $validated['voltage'];
        $reading->current = $validated['current'];

        // Save the Reading instance to the database
        $reading->save();

        // Return success response
        return response()->json(['success' => 'Data saved successfully'], 200);
    }

    // Delete a reading (API)
    public function deleteReading($id)
    {
        $reading = Reading::findOrFail($id);
        $reading->delete();

        return response()->json(['success' => 'Reading deleted successfully']);
    }
}
