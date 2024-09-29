<?php

namespace Database\Seeders;

use App\Models\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userRoles = config('global_data.user_roles');
        foreach($userRoles as $userRole){
            if(!UserRole::where('name', $userRole)->exists()){
                UserRole::create([
                    'name' => 'school_admin'
                ]);
            }
        }
    }
}
