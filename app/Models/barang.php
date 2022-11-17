<?php 
namespace  App\Models; 

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 


class barang extends Model { 
    
public $fillable = ['nama','id','qty','harga_beli','harga_jual','created_at','updated_at'];
public $table = 'produk';
}