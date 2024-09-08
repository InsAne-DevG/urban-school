<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Admin;
use Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::create([
            'name'=> 'admin',
            'status'=> 1
        ]);

        Admin::create([
            'id' => 1,
            'name' => 'Super Admin',
            'phone' => '8650033948',
            'email' => 'admin@admin.com',
            'image' => 'logo.png',
            'role_id' => '1',
            'is_edited' => '1',
            'is_deleted' => '1',
            'is_downloadable' => '1',
            'password' => bcrypt('bilalahmad'),
            'remember_token' =>Str::random(10),
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}
