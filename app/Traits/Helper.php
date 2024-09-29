<?php

namespace App\Traits;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

trait Helper
{
    public static function userRegistration($request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:8',
            'phone' => 'required|digits:10|unique:users,phone',
            'address' => 'required|string|max:255',
            'state' => 'required|integer',
            'city' => 'required|integer',
            'role' => 'required'
        ]);

        if ($validator->fails()) {
            session()->flash('toast_message', $validator->errors()->first());
            return back()->withInput();
        }

        $user = User::create([
            'id' => (string) Str::uuid(),
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
        ]);

        if($user){
            UserProfile::create([
                'id' => (string) Str::uuid(),
                'address' => $request->address,
                'state_id' => $request->state,
                'city_id' => $request->city,
                'user_id' => $user->id
            ]);

            $user->assignRole($request->role);
        }
        session()->flash('toast_message', "User with the $request->role role created successfully!");
        return back();
    }
    }
