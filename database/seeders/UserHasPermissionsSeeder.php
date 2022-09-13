<?php

namespace Database\Seeders;

use App\Models\PermissionsForUser;
use App\Models\UserHasPermissions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserHasPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserHasPermissions::query()->create([
            'user_id'=>1,
            'permissions_for_user_id'=>1
        ]);

        UserHasPermissions::query()->create([
            'user_id'=>1,
            'permissions_for_user_id'=>2
        ]);

        UserHasPermissions::query()->create([
            'user_id'=>1,
            'permissions_for_user_id'=>3
        ]);

        UserHasPermissions::query()->create([
            'user_id'=>2,
            'permissions_for_user_id'=>1
        ]);

        UserHasPermissions::query()->create([
            'user_id'=>2,
            'permissions_for_user_id'=>2
        ]);

        UserHasPermissions::query()->create([
            'user_id'=>3,
            'permissions_for_user_id'=>1
        ]);
    }
}
