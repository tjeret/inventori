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
            ['name' => 'Supervisor'],
            ['name' => 'Keuangan'],
            ['name' => 'Accounting'],
            ['name' => 'Kasir'],
            ['name' => 'Gudang'],
            ['name' => 'Produksi'],
            ['name' => 'Marketing']
        );
        $data->save();
    }
}
