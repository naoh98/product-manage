<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'fullname' => 'Nguyen Phuong Hoan',
            'username' => 'boyraku',
            'email' => 'hoan@gmail.com',
            'password' => bcrypt('12345678'),
            'phone' => '0964979075',
            'address' => 'Kim Ma'
        ]);
        DB::table('permissions')->insert([
            ['name' => 'view_product'],
            ['name' => 'create_product'],
            ['name' => 'update_product'],
            ['name' => 'delete_product']
        ]);
        DB::table('roles')->insert([
            'name' => 'admin'
        ]);
        DB::table('user_role')->insert([
            'role_id' => 1,
            'user_id' => 1,
        ]);
        DB::table('role_permission')->insert([
            ['permisison_id' => 1, 'role_id' => 1],
            ['permisison_id' => 2, 'role_id' => 1],
            ['permisison_id' => 3, 'role_id' => 1],
            ['permisison_id' => 4, 'role_id' => 1]
        ]);
    }
}
