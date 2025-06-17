<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class InitialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('panel_roles')->insert([
            'id' => 1,
            'name' => 'suser',
            'description' => 'S-User',
            'ulid' => Str::ulid(),
            'record_title' => 'suser',
            'is_active' => 1,
        ]);

        DB::table('panel_roles')->insert([
            'id' => 2,
            'name' => 'adminerp',
            'description' => 'Admin ERP',
            'ulid' => Str::ulid(),
            'record_title' => 'adminerp',
            'is_active' => 1,
        ]);

        DB::table('panel_roles')->insert([
            'id' => 3,
            'name' => 'erp',
            'description' => 'ERP',
            'ulid' => Str::ulid(),
            'record_title' => 'erp',
            'is_active' => 1,
        ]);

        DB::table('users')->insert([
            'id' => 1,
            'name' => 'S-User',
            'description' => 'S-User',
            'username' => 'suser',
            'unique' => '642458',
            'record_title' => 'S-User',
            'panel_role_id' => 1,
            'ulid' => Str::ulid(),
            'email' => 'suser@mail.com',
            'password' => Hash::make('642458'),
            'is_active' => 1,
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'name' => 'ERP Admin 001',
            'description' => 'ERP Admin 001',
            'username' => 'erpadmin001',
            'unique' => '123456',
            'record_title' => 'ERP Admin 001',
            'panel_role_id' => 2,
            'ulid' => Str::ulid(),
            'email' => 'erpadmin001@mail.com',
            'password' => Hash::make('123456'),
            'is_active' => 1,
        ]);

        DB::table('users')->insert([
            'id' => 3,
            'name' => 'ERP 001',
            'description' => 'ERP 001',
            'username' => 'erp001',
            'unique' => '123456',
            'record_title' => 'ERP 001',
            'panel_role_id' => 3,
            'ulid' => Str::ulid(),
            'email' => 'erp001@mail.com',
            'password' => Hash::make('123456'),
            'is_active' => 1,
        ]);
    }
}
