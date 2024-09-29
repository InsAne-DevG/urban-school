<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Admin;
use App\Models\UserRole;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(!Role::where('name', 'admin')->exists()){
            Role::create([
                'name'=> 'admin',
                'status'=> 1
            ]);
        }

        $role = Role::where('name', 'admin')->first();

        if(!Admin::where('email', 'admin@admin.com')->exists()){
            Admin::create([
                'name' => 'Super Admin',
                'phone' => '8650033948',
                'email' => 'admin@admin.com',
                'image' => 'logo.png',
                'role_id' => $role->id,
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
}
