<?php

namespace Database\Seeders;

use App\Models\ProductStock;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ProductStockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new ProductStock();
        $data->id_product = 1;
        $data->value = 19000;
        $data->product_date = Carbon::now();
        $data->save();

        $data = new ProductStock();
        $data->id_product = 2;
        $data->value = 19000;
        $data->product_date = Carbon::now();
        $data->save();

        $data = new ProductStock();
        $data->id_product = 3;
        $data->value = 19000;
        $data->product_date = Carbon::now();
        $data->save();

        $data = new ProductStock();
        $data->id_product = 4;
        $data->value = 19000;
        $data->product_date = Carbon::now();
        $data->save();

        $data = new ProductStock();
        $data->id_product = 5;
        $data->value = 19000;
        $data->product_date = Carbon::now();
        $data->save();

        $data = new ProductStock();
        $data->id_product = 6;
        $data->value = 19000;
        $data->product_date = Carbon::now();
        $data->save();

        $data = new ProductStock();
        $data->id_product = 7;
        $data->value = 19000;
        $data->product_date = Carbon::now();
        $data->save();

        $data = new ProductStock();
        $data->id_product = 8;
        $data->value = 19000;
        $data->product_date = Carbon::now();
        $data->save();

        $data = new ProductStock();
        $data->id_product = 9;
        $data->value = 19000;
        $data->product_date = Carbon::now();
        $data->save();

        $data = new ProductStock();
        $data->id_product = 10;
        $data->value = 19000;
        $data->product_date = Carbon::now();
        $data->save();

        $data = new ProductStock();
        $data->id_product = 11;
        $data->value = 19000;
        $data->product_date = Carbon::now();
        $data->save();
    }
}
