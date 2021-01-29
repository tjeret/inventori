<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =  Role::create(
            ['name' => 'Admin'],
        );
        $data->save();

        $data =  Role::create(
            ['name' => 'Keuangan'],
        );
        $data->save();

        $data =  Role::create(
            ['name' => 'Supervisor'],
        );
        $data->save();

        $data =  Role::create(
            ['name' => 'Accounting'],
        );
        $data->save();

        $data =  Role::create(
            ['name' => 'Kasir'],
        );
        $data->save();

        $data =  Role::create(
            ['name' => 'Gudang'],
        );
        $data->save();

        $data =  Role::create(
            ['name' => 'Produksi'],
        );
        $data->save();

        $data =  Role::create(
            ['name' => 'Marketing'],
        );
        $data->save();
    }
}
