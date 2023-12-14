<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CabangJucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cabang_juc')->insert([
            'nama_tempat' => 'Jasa Utama Capital Sekuritas Jakarta',
            'pic' => 'Tio Deddy',
            'no_telp' => '02183789000',
            'alamat' => 'Gedung Kospin Jasa Lt. 7-8, Jl. Gatot Subroto, Daerah Khusus Ibukota Jakarta 12780',
            'latitude' => '106.836631',
            'longitude' => '-6.2439509'
        ]);
    }
}
