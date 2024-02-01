<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        DB::table('admins')->insert([
            'nipp' => 'admin-unit',
            'no_telp' => '082212341234',
            'email'=>'test@gmail.com',
            'role' => 'super-admin',
            'password' => Hash::make('admin123')
        ]);
        DB::table('admins')->insert([
            'nipp' => 'admin',
            'no_telp' => '082212341235',
            'email'=>'test1@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('admin123')
        ]);
        DB::table('admins')->insert([
            'nipp' => 'manajer',
            'no_telp' => '082212341236',
            'email'=>'test2@gmail.com',
            'role' => 'manajer',
            'password' => Hash::make('manajer123')
        ]);
        DB::table('users')->insert([
            'name' => 'Test User',
            'email' => 'user@gmail.com',
            'email'=>'test3@gmail.com',
            'kontak' => '082212341237',
            'password' => Hash::make('user123'),
        ]);
    }
}
