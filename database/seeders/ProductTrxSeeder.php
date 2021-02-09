<?php

namespace Database\Seeders;

use App\Models\ProductTrx;
use Illuminate\Database\Seeder;

class ProductTrxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new ProductTrx();
        $data->debit = 190;
        $data->id_product_stock = 1;
        $data->credit = 190;
        $data->save();
    }
}
