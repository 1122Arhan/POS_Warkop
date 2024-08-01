<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
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
        $ktg = Kategori::all();
        return view('menu.form', compact('std', 'ktg'));
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
        $mn->kategoris_id = $request->kategori;
        $mn->save();

        return redirect('/menu/');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mn = Menu::find($id);
        $std = Stand::all();
        $ktg = Kategori::all();
        return view('menu.edit', compact('mn', 'std', 'ktg'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mn = Menu::find($id);
        $mn->kd_menu = $request->kd_menu;
        $mn->nama_menu = $request->nama_menu;
        $mn->harga = $request->harga;
        $mn->stands_id = $request->stand;
        $mn->kategoris_id = $request->kategori;
        $mn->save();

        return redirect('/menu/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mn = Menu::find($id);
        $mn->delete();
        return redirect('/menu/');
    }
}
