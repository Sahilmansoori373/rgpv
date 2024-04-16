<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'=>'Super Admin',
                'email'=>'superadmin@gmail.com',
                'password'=> Hash::make('123456')
            ],
            [
                'name'=>'Sub Admin',
                'role'=>'2',
                'email'=>'subadmin@gmail.com',
                'password'=> Hash::make('123456')
            ],
            [
                'name'=>'Admin',
                'role'=>'3',
                'email'=>'admin@gmail.com',
                'password'=> Hash::make('123456')
            ]
        ];

        // Looping and Inserting Array's Users into User Table
        foreach($users as $user){
            User::create($user);
        }

        $roles = [
            [
                'name'=>'Super Admin',
            ],
            [
                'name'=>'Sub Admin',
            ],
            [
                'name'=>'Admin',
            ]
        ];

        foreach($roles as $role){
            Role::create($role);
        }
    }
}
