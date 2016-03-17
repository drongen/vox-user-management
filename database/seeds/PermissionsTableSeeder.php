<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            [
                'name' => 'create-user',
                'display_name' => 'Create User',
                'description' => 'Gives the permission to create new users!',
            ],
            [
                'name' => 'buy-car',
                'display_name' => 'Buy Car',
                'description' => 'Whoever has this permission can buy cars in the system!',
            ],
        ]);

        DB::table('permission_role')->insert([
            [
                'permission_id' => 1,
                'role_id' => 1,
            ],
            [
                'permission_id' => 2,
                'role_id' => 3,
            ]
        ]);
    }
}
