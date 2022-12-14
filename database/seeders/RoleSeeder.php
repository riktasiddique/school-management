<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles =[
           [
            'name' => 'Admin',
            'created_at' => now()->toDateTimeString()
           ],
           [
            'name' => 'Teacher',
            'created_at' => now()->toDateTimeString()
           ],
           [
            'name' => 'Student',
            'created_at' => now()->toDateTimeString()
           ]
        ];
        Role::insert($roles);
    }
}
