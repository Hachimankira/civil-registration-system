<?php

namespace App\Http\Controllers;

use App\Models\Birth;
use App\Models\NationalIDCard;
use Illuminate\Http\Request;

class NationalIDCardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = NationalIDCard::all();
        return view('nationalIDCard.list', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $birth = Birth::find($request->birth_id);
        return view('nationalIDCard.add', ['birth' => $birth]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        NationalIDCard::create($request->all());

        return redirect()->route('idcard.index')
        ->with('success', 'National Card registered successfully.');
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
        $data = NationalIDCard::find($id);
        return view('nationalIDCard.edit' , compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = NationalIDCard::find($id);
        $data->update($request->all());

        return redirect('/idcard')
                     ->with('success', 'National ID Card updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function changeStatus($id, $status)
{
    $nationalIDCard = NationalIDCard::find($id);

    if ($nationalIDCard) {
        $nationalIDCard->status = $status;
        $nationalIDCard->save();

        return redirect('/idcard')->with('success', 'Status changed successfully.');
    } else {
        return redirect('/idcard')->with('error', 'National ID Card not found.');
    }
}
}
