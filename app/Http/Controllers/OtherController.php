<?php

namespace App\Http\Controllers;

use App\Models\Birth;
use App\Models\Contact;
use App\Models\NationalIDCard;
use App\Models\VoterCard;
use Illuminate\Http\Request;

class OtherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function about()
    {
        $birth = Birth::where('status', 'registered')->count();
        $idcard = NationalIDCard::where('status', 'registered')->count();
        $voter = VoterCard::where('status', 'registered')->count();
        
        return view('about', compact('birth', 'idcard', 'voter'));
    }

    public function contact()
    {
        return view('contact');
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
        Contact::create($request->all());
        return redirect()->route('contact')->with('success', 'Message sent successfully');
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
