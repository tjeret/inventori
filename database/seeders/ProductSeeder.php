<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new Product();
        $data->id_price = 1;
        $data->id_variant = 1;
        $data->name = 'product 1';
        $data->label = 12345677;

        $data->save();

        $data = new Product();
        $data->id_price = 2;
        $data->id_variant = 2;
        $data->name = 'product 2';
        $data->label = 12345677;

        $data->save();

        $data = new Product();
        $data->id_price = 3;
        $data->id_variant = 3;
        $data->name = 'product 3';
        $data->label = 12345677;

        $data->save();

        $data = new Product();
        $data->id_price = 4;
        $data->id_variant = 4;
        $data->name = 'product 4';
        $data->label = 12345677;

        $data->save();

        $data = new Product();
        $data->id_price = 5;
        $data->id_variant = 5;
        $data->name = 'product 5';
        $data->label = 12345677;

        $data->save();

        $data = new Product();
        $data->id_price = 6;
        $data->id_variant = 6;
        $data->name = 'product 6';
        $data->label = 12345677;

        $data->save();

        $data = new Product();
        $data->id_price = 7;
        $data->id_variant = 7;
        $data->name = 'product 7';
        $data->label = 12345677;

        $data->save();

        $data = new Product();
        $data->id_price = 8;
        $data->id_variant = 8;
        $data->name = 'product 8';
        $data->label = 12345677;

        $data->save();

        $data = new Product();
        $data->id_price = 9;
        $data->id_variant = 9;
        $data->name = 'product 9';
        $data->label = 12345677;

        $data->save();

        $data = new Product();
        $data->id_price = 10;
        $data->id_variant = 10;
        $data->name = 'product 10';
        $data->label = 12345677;

        $data->save();

        $data = new Product();
        $data->id_price = 11;
        $data->id_variant = 11;
        $data->name = 'product 11';
        $data->label = 12345677;

        $data->save();
    }
}
