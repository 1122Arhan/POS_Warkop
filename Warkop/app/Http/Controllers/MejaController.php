<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meja;

class MejaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $no = 1;
        $meja = Meja::all();
        return view('meja.index', compact('no', 'meja'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('meja.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $meja = new Meja;
        $meja->kd_meja = $request->kd_meja;
        $meja->posisi = $request->posisi;
        $meja->save();

        return redirect('/meja');
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
        $meja = Meja::find($id);
        return view('meja.edit', compact('meja'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $meja = Meja::find($id);
        $meja->kd_meja = $request->kd_meja;
        $meja->posisi = $request->posisi;
        $meja->save();
        return redirect('/meja/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $meja = Meja::find($id);
        $meja->delete();
        return redirect('/meja/');
    }
}
