<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gudang;

class GudangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 100; $i++) {
            Gudang::create([
            'kode_barang' => 'GB' . str_pad($i, 3, '0', STR_PAD_LEFT),
            'nama_barang' => 'God Urinal ' . $i,
            'jenis_barang' => 'Urinal',
            'stok' => 100,
            'satuan' => 'pcs',
            ]);
        }
    }
}
