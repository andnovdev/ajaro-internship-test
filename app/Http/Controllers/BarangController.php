<?php

namespace App\Http\Controllers;

use App\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = Barang::latest()->paginate(10);

        return view('barangs.index',compact('barangs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barangs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|unique:barangs,kode',
            'nama' => 'required|max:50',
            'deskripsi' => 'required|max:3000',
            'stok' => 'required|integer',
            'harga' => 'required|integer',
            'berat' => 'required|integer',
        ]);

        Barang::create($request->all());
        return redirect()->route('barangs.index')
            ->with('success', 'Barang ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        return view('barangs.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'kode' => 'required|unique:barangs,kode',
            'nama' => 'required|max:50',
            'deskripsi' => 'required|max:3000',
            'stok' => 'required|integer',
            'harga' => 'required|integer',
            'berat' => 'required|integer',
        ]);

        $barang->update($request->all());

        return redirect()->route('index')
            ->with('success', 'Barang ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        $barang->delete();

        return redirect()->route('barangs.index')
            ->with('success', 'Barang ditambahkan');
    }
}
