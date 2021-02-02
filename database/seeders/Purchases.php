<?php

namespace Database\Seeders;

use App\Models\Purchase;
use Illuminate\Database\Seeder;

class Purchases extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =  Purchase::create(
            [
                'suplier_id' => '1',
                'category_id' => '1',
                'product_id' => '1',
                'bill' => '1',
                'price' => '1',
            ]
        );
        $data->save();
    }
}
