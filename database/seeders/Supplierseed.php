<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Supplier;

class Supplierseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =  Supplier::create(
            [
                'name' => 'supp1',
                'address' => '1',
                'phone' => '1',

            ]
        );
        $data->save();
    }
}
