<?php

namespace App\Http\Controllers;

use App\Models\Birth;
use Illuminate\Http\Request;

class MyDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $birth = Birth::find($request->birth_id);
        $idcard = $birth->nationalID;
        $status = $idcard->status;

        if ($status == 'registered') {
            return view('document.index', ['birth' => $birth , 'idcard' => $idcard]);
        } else {
            return view('document.index', ['birth' => $birth]);

        }
        // return response()->json(['birth' => $birth , 'idcard' => $idcard, 'status' => $status]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $birth = Birth::find($id);
        return view('document.index', ['birth' => $birth]);
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
