<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name'  => 'Muhammad Iqbal',
                'username' => 'iqbal',
                'email'  => 'mhmd.iqbal1599@gmail.com',
                'is_admin'  => 1,
                'email_verified_at'  => now(),
                'password'  => Hash::make('password'),
                'remember_token' => Str::random(10),
            ]
        );
    }
}
