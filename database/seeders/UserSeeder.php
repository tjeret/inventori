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
            'role_id' => 0,
            'suspend' => 1, 'name' => 'Ini adalah nama'
        ]);
        $data->save();
        $data =  User::create([
            'username' => 'Supervisor',
            'email' => 'Supervisor@gmail.com',
            'password' => Hash::make('Supervisor'),
            'role_id' => 1,
            'suspend' => 1, 'name' => 'Ini adalah nama'
        ]);
        $data->save();
        $data =  User::create([
            'username' => 'Keuangan',
            'email' => 'Keuangan@gmail.com',
            'password' => Hash::make('Keuangan'),
            'role_id' => 2,
            'suspend' => 1, 'name' => 'Ini adalah nama'
        ]);
        $data->save();
        $data =  User::create([
            'username' => 'Accounting',
            'email' => 'Accounting@gmail.com',
            'password' => Hash::make('Accounting'),
            'role_id' => 3,
            'suspend' => 1, 'name' => 'Ini adalah nama'
        ]);
        $data->save();
        $data =  User::create([
            'username' => 'Kasir',
            'email' => 'Kasir@gmail.com',
            'password' => Hash::make('Kasir'),
            'role_id' => 4,
            'suspend' => 1, 'name' => 'Ini adalah nama'
        ]);
        $data->save();
        $data =  User::create([
            'username' => 'Gudang',
            'email' => 'Gudang@gmail.com',
            'password' => Hash::make('Gudang'),
            'role_id' => 5,
            'suspend' => 1, 'name' => 'Ini adalah nama'
        ]);
        $data->save();
        $data =  User::create([
            'username' => 'Produksi',
            'email' => 'Produksi@gmail.com',
            'password' => Hash::make('Produksi'),
            'role_id' => 6,
            'suspend' => 1, 'name' => 'Ini adalah nama'
        ]);
        $data->save();
        $data =  User::create([
            'username' => 'Marketing',
            'email' => 'Marketing@gmail.com',
            'password' => Hash::make('Marketing'),
            'role_id' => 9,
            'suspend' => 1, 'name' => 'Ini adalah nama'
        ]);
        $data->save();
    }
}
