<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class produkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produk')->insert(array(['nama' => 'Meja', 'id_kategori' => '1', 'qty' => '12', 'harga_beli' => '50000', 'harga_jual' => '540000', ],
        ['nama' => 'Kursi', 'id_kategori' => 1, 'qty' => '12', 'harga_beli' => '40000', 'harga_jual' => '450000', ] )); 
    }
}
