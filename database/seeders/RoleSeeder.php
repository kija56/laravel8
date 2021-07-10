<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'System Administrator',
            'slug' => 'system-admininstrator',
            'description'=>'Contols the whole system'
        ]);
        DB::table('roles')->insert([
            'name' => 'Doctor',
            'slug' => 'doctor',
            'description'=>'Handles consultations with patients'
        ]);
        DB::table('roles')->insert([
            'name' => 'Patient',
            'slug' => 'patient',
            'description' => 'Requests consultation with the doctor'
        ]);
        DB::table('roles')->insert([
            'name' => 'Pharmasist',
            'slug' => 'pharmasist',
            'description' => 'Handles pharmacy chores'
        ]);
        DB::table('roles')->insert([
            'name' => 'Laboratory Technician',
            'slug' => 'laboratory-technician',
            'description' => 'Handles Laboratory Chores'
        ]);
        DB::table('roles')->insert([
            'name' => 'Recieptionist',
            'slug' => 'recieptionist',
            'description' => 'Handles patient onboarding'
        ]);
        DB::table('roles')->insert([
            'name' => 'Nurse',
            'slug' => 'nurse',
            'description' => 'Takes care of patients and assists doctors on their duties'
        ]);
    }
}
