<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::factory()->create([
            'email' => 'admin@admin.com',
            'password' => 'password',
            'role' => Admin::ROLE_SUPERADMIN
        ]);
        
        Admin::factory(10)->create([
            'password' => 'password',
        ]);
    }
}
