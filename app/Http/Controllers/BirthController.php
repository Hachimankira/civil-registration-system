<?php

namespace App\Http\Controllers;

use App\Models\Birth;
use Illuminate\Http\Request;

class BirthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $births = Birth::all();
        return view('birth.list', compact('births'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('birth.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Birth::create($request->all());

        return redirect()->route('birth.index')
        ->with('success', 'Birth record created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $birth = Birth::find($id);
        return response()->json($birth);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $birth = Birth::find($id);
        return view('birth.edit', compact('birth'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $birth = Birth::find($id);
        $birth->update($request->all());

        return redirect('/birth')
                     ->with('success', 'Birth record updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
