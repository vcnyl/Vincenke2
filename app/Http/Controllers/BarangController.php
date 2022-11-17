<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk=Produk::all();
            return view('produk', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Produk::create([ 
            'nama'   => $request -> nama, 
            'id_kategori'     => $request->id, 
            'qty'     => $request->qty, 
            'harga_beli'     => $request->harga_beli, 
            'harga_jual'     => $request->harga_jual,
            'keterangan'     => $request->keterangan  
        ]); 
         return redirect()->route('produk.index')->with(['success' => 'Data Berhasil Disimpan!']);  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk) 
    { 
        return view('edit', compact('produk')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $produk) 
    { 
       $produk->update([ 
        'nama'   => $request->nama, 
        'id_kategori'     => $request->id, 
        'qty'     => $request->qty, 
        'harga_beli'     => $request->harga_beli, 
        'harga_jual'     => $request->harga_jual,
        'keterangan'     => $request->keterangan 
            ]); 
        return redirect()->route('produk.index')->with(['success' => 'Data Berhasil Diubah!']); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(produk $produk) 
    { 
       $produk->delete();  

        //redirect to index 
        return redirect()->route('produk.index')->with(['success' => 'Data Berhasil Dihapus!']); 
    }
}