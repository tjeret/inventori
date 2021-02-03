<?php

namespace Database\Seeders;

use App\Models\MaterialCategorie;
use Illuminate\Database\Seeder;

class MaterialCategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new MaterialCategorie();
        $data->name = 'Tepung';
        $data->save();
    }
}
