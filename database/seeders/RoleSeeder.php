<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('roles')->insert([
        //     ['name' => 'admin', 'guard_name' => 'web'],
        //     ['name' => 'member', 'guard_name' => 'web'],
        //     ['name' => 'guru', 'guard_name' => 'web'],
        //     ['name' => 'genies', 'guard_name' => 'web'],
        //     // Add more roles if needed
        // ]);
        DB::table('roles')->insert([
            ['name' => 'admin'],
            ['name' => 'member'],
            ['name' => 'guru'],
            ['name' => 'genies'],
            // Add more roles if needed
        ]);
    }
}
