<?php

namespace Database\Seeders;

use App\Models\PermissionsForUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PermissionsForUser::query()->create([
            'permission_name'=>'create',
        ]);

        PermissionsForUser::query()->create([
            'permission_name'=>'read',
        ]);

        PermissionsForUser::query()->create([
            'permission_name'=>'edit',
        ]);

        PermissionsForUser::query()->create([
            'permission_name'=>'delete',
        ]);

        PermissionsForUser::query()->create([
            'permission_name'=>'update',
        ]);
    }
}
