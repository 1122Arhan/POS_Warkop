<?php

namespace App\Http\Controllers;

use App\Models\Stand;
use Illuminate\Http\Request;


class StandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $no = 1;
        $std = Stand::all();
        return view('stand.index', compact('no', 'std'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stand.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $std = new Stand;
        $std->kd_stand = $request->kd_stand;
        $std->stand = $request->stand;
        $std->telp = $request->telp;
        $std->save();

        return redirect('/stand');
    }

    public function edit(string $id)
    {
        $std = Stand::find($id);
        return view('stand.edit', compact('std'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $std = Stand::find($id);
        $std->kd_stand = $request->kd_stand;
        $std->stand = $request->stand;
        $std->telp = $request->telp;
        $std->save();
        return redirect('/stand');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
