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
        $data =  User::create(
            [
                'username' => 'Admin',
                'email' => 'Admin@gmail.com',
                'password' => Hash::make('Admin'),
                'role' => 1,
                'suspend' => 1,
            ],
            [
                'username' => 'Supervisor',
                'email' => 'Supervisor@gmail.com',
                'password' => Hash::make('Supervisor'),
                'role' => 2,
                'suspend' => 1,
            ],
            [
                'username' => 'Keuangan',
                'email' => 'Supervisor@gmail.com',
                'password' => Hash::make('Supervisor'),
                'role' => 3,
                'suspend' => 1,
            ],
            [
                'username' => 'Accounting',
                'email' => 'Accounting@gmail.com',
                'password' => Hash::make('Accounting'),
                'role' => 4,
                'suspend' => 1,
            ],
            [
                'username' => 'Kasir',
                'email' => 'Kasir@gmail.com',
                'password' => Hash::make('Kasir'),
                'role' => 5,
                'suspend' => 1,
            ],
            [
                'username' => 'Gudang',
                'email' => 'Gudang@gmail.com',
                'password' => Hash::make('Gudang'),
                'role' => 6,
                'suspend' => 1,
            ],
            [
                'username' => 'Produksi',
                'email' => 'Produksi@gmail.com',
                'password' => Hash::make('Produksi'),
                'role' => 7,
                'suspend' => 1,
            ],
            [
                'username' => 'Marketing',
                'email' => 'Marketing@gmail.com',
                'password' => Hash::make('Marketing'),
                'role' => 8,
                'suspend' => 1,
            ],
        );
        $data->save();
    }
}
