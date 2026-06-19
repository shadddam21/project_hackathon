<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Food;
use Illuminate\Database\Seeder;

class DemoSeeder extends Seeder
{
    public function run(): void
    {
        $resto = User::create([
            'name' => 'Resto Demo',
            'email' => 'resto@demo.com',
            'password' => bcrypt('password'),
            'role' => 'restaurant',
        ]);

        Food::insert([
            [
                'user_id' => $resto->id,
                'nama' => 'Nasi Goreng',
                'deskripsi' => 'Nasi goreng spesial',
                'stok' => 10,
                'harga' => 15000,
                'jenis' => 'real_food',
                'alamat' => 'Jl. Contoh No. 1',
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => $resto->id,
                'nama' => 'Mystery Box Sore',
                'deskripsi' => 'Paket surplus makanan random',
                'stok' => 5,
                'harga' => 10000,
                'jenis' => 'gacha',
                'alamat' => 'Jl. Contoh No. 1',
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        User::create([
            'name' => 'User Demo',
            'email' => 'user@demo.com',
            'password' => bcrypt('password'),
            'role' => 'user',
        ]);
    }
}