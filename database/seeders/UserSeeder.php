<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'role_id'=> 1,
            'branch_id'=> 1,
            'name'=> 'Paul Blart',
            'email'=> 'admin@admin.com',
            'username' => 'admin',
            'password' => bcrypt('password'),
        ]);

        User::insert([
            'role_id'=> 2,
            'branch_id'=> 2,
            'name'=> 'John Doe',
            'email'=> 'staff@staff.com',
            'username' => 'staff',
            'password' => bcrypt('password'),
        ]);
    }
}
