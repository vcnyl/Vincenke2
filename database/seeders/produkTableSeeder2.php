<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class produkTableSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produk')->insert(array(['nama' => 'Meja', 'id' => '10', 'qty' => '12', 'harga_beli' => '50000', 'harga_jual' => '540000','keterangan' => 'debit' ],
        ['nama' => 'Kursi', 'id' => '11', 'qty' => '12', 'harga_beli' => '40000', 'harga_jual' => '450000','keterangan' => 'kredit' ] )); 
    }
}
