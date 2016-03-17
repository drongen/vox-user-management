<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'name' => 'super_admin',
                'display_name' => 'Super Admin',
                'description' => 'The most powerful administrator in the system!',
            ],
            [
                'name' => 'admin',
                'display_name' => 'Administrator',
                'description' => 'Normal administrator of the system.',
            ],
            [
                'name' => 'user',
                'display_name' => 'User',
                'description' => 'The user role in the system!',
            ],
        ]);
    }
}
