<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            'id_customer' => 'TDP-001-003',
             'nama' => 'nur ANU',
             'category' => 'Microwave',
             'pic' => 'joni',
             'telepon' => '081283380027',
             'alamat' => 'H.kempet',
             'bandwidht' =>'10',
             'ip' => '192.168.69.69',
             'status' => 'Actived',
             'tanggal_berlangganan' => '2023-10-15',
             'keterangan' => 'Pelanggan kaya'
        ]);
    }
}
