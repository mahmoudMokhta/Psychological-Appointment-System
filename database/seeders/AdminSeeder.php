<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User;
        $user->name = 'Admin Test';
        $user->email = 'admin@test.com';
        $user->password = Hash::make('123456');
        $user->role = 'admin';
        $user->address = 'anywhere';
        $user->phone = '123456789';
        $user->save();

    }
}
