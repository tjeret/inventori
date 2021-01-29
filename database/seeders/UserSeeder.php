<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data =  User::create([
            'username' => 'Admin',
            'email' => 'Admin@gmail.com',
            'password' => Hash::make('Admin'),
            'role' => 0,
            'suspend' => 1,
        ]);
        $data->save();
        $data =  User::create([
            'username' => 'Supervisor',
            'email' => 'Supervisor@gmail.com',
            'password' => Hash::make('Supervisor'),
            'role' => 1,
            'suspend' => 1,
        ]);
        $data->save();
        $data =  User::create([
            'username' => 'Keuangan',
            'email' => 'Keuangan@gmail.com',
            'password' => Hash::make('Keuangan'),
            'role' => 2,
            'suspend' => 1,
        ]);
        $data->save();
        $data =  User::create([
            'username' => 'Accounting',
            'email' => 'Accounting@gmail.com',
            'password' => Hash::make('Accounting'),
            'role' => 3,
            'suspend' => 1,
        ]);
        $data->save();
        $data =  User::create([
            'username' => 'Kasir',
            'email' => 'Kasir@gmail.com',
            'password' => Hash::make('Kasir'),
            'role' => 4,
            'suspend' => 1,
        ]);
        $data->save();
        $data =  User::create([
            'username' => 'Gudang',
            'email' => 'Gudang@gmail.com',
            'password' => Hash::make('Gudang'),
            'role' => 5,
            'suspend' => 1,
        ]);
        $data->save();
        $data =  User::create([
            'username' => 'Produksi',
            'email' => 'Produksi@gmail.com',
            'password' => Hash::make('Produksi'),
            'role' => 6,
            'suspend' => 1,
        ]);
        $data->save();
        $data =  User::create([
            'username' => 'Marketing',
            'email' => 'Marketing@gmail.com',
            'password' => Hash::make('Marketing'),
            'role' => 9,
            'suspend' => 1,
        ]);
        $data->save();
    }
}
