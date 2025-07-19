<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Ingredients;
use App\Models\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Admin',
            'username' => 'Admin',
            'email' => 'admin@gmail.com',
            'nik' => '0000',
            'password' => bcrypt('12345'),
            'is_admin' => 1
        ]);

        Ingredients::create([
            'nama' => 'Beras',
            'nilai' => 20,
            'satuan' => 'gram',
            'deskripsi' => 'Beras untuk nasi',
            'kategori' => 'Bahan'
        ]);

        Ingredients::create([
            'nama' => 'Minyak Goreng',
            'nilai' => 5,
            'satuan' => 'milliliter',
            'deskripsi' => 'Minyak goreng tropical',
            'kategori' => 'Bahan'
        ]);

        Menu::create([
            'nama' => 'Nasi Goreng',
            'harga' => 30000,
            'deskripsi' => 'Nasi Goreng Seafood',
            'foto' => 'assets/img/menu/nasgor.jpg',
            'kategori_1' => 'Halal',
            'kategori_2' => 'Non Vegetarian',
        ]);
    }
}
