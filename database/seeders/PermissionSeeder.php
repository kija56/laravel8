<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'name' => 'can add staff',
            'slug' => 'can-add-staff',
        ]);
        DB::table('permissions')->insert([
            'name' => 'can edit staff',
            'slug' => 'can-edit-staff',
        ]);
        DB::table('permissions')->insert([
            'name' => 'can delete staff',
            'slug' => 'can-delete-staff',
        ]);
        DB::table('permissions')->insert([
            'name' => 'can add department',
            'slug' => 'can-add-department',
        ]);
        DB::table('permissions')->insert([
            'name' => 'can edit department',
            'slug' => 'can-edit-department',
        ]);
        DB::table('permissions')->insert([
            'name' => 'can delete department',
            'slug' => 'can-delete-department',
        ]);
    }
}
