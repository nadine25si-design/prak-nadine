<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoryPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Seed Kategori Layanan menggunakan Eloquent ORM
        $kiloan = Category::firstOrCreate(
            ['slug' => 'laundry-kiloan'],
            [
                'name'        => 'Laundry Kiloan',
                'description' => 'Layanan cuci dan kering pakaian harian berbasis timbangan kilogram, hemat dan higienis.',
                'icon'        => 'bi-basket3',
            ]
        );

        $setrika = Category::firstOrCreate(
            ['slug' => 'setrika-pakaian'],
            [
                'name'        => 'Setrika Pakaian',
                'description' => 'Layanan setrika uap rapi, halus, dan wangi siap simpan atau langsung digunakan.',
                'icon'        => 'bi-fire',
            ]
        );

        $antarJemput = Category::firstOrCreate(
            ['slug' => 'antar-jemput'],
            [
                'name'        => 'Antar Jemput',
                'description' => 'Layanan antar dan jemput cucian langsung ke alamat Anda, praktis dan hemat waktu.',
                'icon'        => 'bi-truck',
            ]
        );

        $satuan = Category::firstOrCreate(
            ['slug' => 'laundry-satuan-dry-clean'],
            [
                'name'        => 'Satuan & Dry Cleaning',
                'description' => 'Perawatan khusus pakaian formal, jas, gaun, selimut, bedcover, dan boneka.',
                'icon'        => 'bi-stars',
            ]
        );

        // 2. Seed Paket Laundry menggunakan Query Builder (DB::table)
        $packages = [
            [
                'category_id' => $kiloan->id,
                'name'        => 'Cuci Lipat Reguler',
                'price'       => 5000,
                'unit'        => 'Kg',
                'duration'    => '2 Hari',
                'description' => 'Cuci bersih, pengeringan mesin, dan lipat rapi dengan pewangi pilihan.',
                'is_active'   => true,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'category_id' => $kiloan->id,
                'name'        => 'Cuci Komplit Express',
                'price'       => 9000,
                'unit'        => 'Kg',
                'duration'    => '1 Hari',
                'description' => 'Layanan kilat cuci, kering, dan setrika uap selesai dalam 24 jam.',
                'is_active'   => true,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'category_id' => $setrika->id,
                'name'        => 'Setrika Uap Kilat',
                'price'       => 4500,
                'unit'        => 'Kg',
                'duration'    => '1 Hari',
                'description' => 'Khusus pakaian yang sudah dicuci sendiri, disetrika dengan setrika uap anti kusut.',
                'is_active'   => true,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'category_id' => $satuan->id,
                'name'        => 'Cuci Bedcover Jumbo',
                'price'       => 25000,
                'unit'        => 'Pcs',
                'duration'    => '2 Hari',
                'description' => 'Pencucian bedcover tebal berukuran king/queen, higienis bebas tungau & debu.',
                'is_active'   => true,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'category_id' => $antarJemput->id,
                'name'        => 'Paket Antar Jemput Rumbai',
                'price'       => 10000,
                'unit'        => 'Trip',
                'duration'    => 'Sesuai Jadwal',
                'description' => 'Kurir Laundry Kita menjemput dan mengantar cucian langsung ke rumah/kos Anda di area Rumbai.',
                'is_active'   => true,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ];

        foreach ($packages as $pkg) {
            $exists = DB::table('packages')->where('name', $pkg['name'])->exists();
            if (!$exists) {
                DB::table('packages')->insert($pkg);
            }
        }
    }
}

