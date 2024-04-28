<?php

namespace App\Http\Controllers;

use App\Models\Birth;
use App\Models\VoterCard;
use Illuminate\Http\Request;

class VoterCardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = VoterCard::all();
        return view('voter.list', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $birth = Birth::find($request->birth_id);
        return view('voter.add', ['birth' => $birth]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        VoterCard::create($request->all());

        return redirect()->route('voter.index')
        ->with('success', 'National Card registered successfully.');
    }

    public function changeStatus($id, $status)
    {
        $data = VoterCard::find($id);

        if ($data) {
            $data->status = $status;
            $data->save();

            return redirect('/voter')->with('success', 'Status changed successfully.');
        } else {
            return redirect('/voter')->with('error', 'Voter Card not found.');
        }
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
