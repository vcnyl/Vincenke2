<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kategoricontroller extends Controller
{
    public  function  insert_eloquent() 
{ 
Produk::create(['nama' => 'Bahan Bangunan', 'harga' => 1000, 
]); 
 return view('produk', ['produk' => $produk]);
}
}
