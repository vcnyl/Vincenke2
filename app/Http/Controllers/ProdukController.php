<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB; 
use App\Models\barang;
class ProdukController extends Controller
{
    
    //Eloquent
    public  function show_eloquent() { 
        $produk = barang::all(); 
        return view('index', ['produk' => $produk]); 
    }

    public  function  insert_eloquent() 
    { 
    barang::create(['nama' => 'Bahan', 'id_kategori' => 2, 'qty' => 4, 'harga_beli' => 1000,'harga_jual' => 2000 
    ]); 
     //return view('produk', ['produk' => $produk]);
    }

    public  function  update_eloquent() 
    { 
    barang::where('id',10) 
    ->update(['harga_beli'  =>  '50000000', 
    ]); 
    }

    //crud
    

} 












    
// public function index(){ 
// $produk='orange';
// return view('produk', ['produk' => $produk]);
// }

// public function show()
// {
// $produk = ['Aqua 1L','Minuman ','Buku Sejarah','Mouse','CPU','gelas','HP'];
// return view('show', ['produk' => $produk]);
// } 
//}