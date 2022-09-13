<?php

namespace Database\Seeders;

use App\Models\PermissionsForUser;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::query()->create([
            'name'=>'User1',
            'email'=>'user1@mail.com',
            'password'=>Hash::make('user1password')
        ]);

        User::query()->create([
            'name'=>'User2',
            'email'=>'user2@mail.com',
            'password'=>Hash::make('user2password')
        ]);

        User::query()->create([
            'name'=>'User3',
            'email'=>'user3@mail.com',
            'password'=>Hash::make('user3password')
        ]);
    }
}
