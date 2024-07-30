<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Stand;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $no = 1;
        $mn = Menu::all();

        return view('menu.index', compact('no', 'mn'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $std = Stand::all();
        return view('menu.form', compact('std'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mn = new Menu();
        $mn->kd_menu = $request->kd_menu;
        $mn->nama_menu = $request->nama_menu;
        $mn->harga = $request->harga;
        $mn->stands_id = $request->stand;
        $mn->kategori = $request->kategori;
        $mn->save();

        return redirect('/menu/');
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