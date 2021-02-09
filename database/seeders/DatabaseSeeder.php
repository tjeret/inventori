<?php

namespace Database\Seeders;

use App\Models\Purcasing;
use App\Models\Recipt;
use App\Models\Supplier;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(ProfilSeeder::class);
        $this->call(IngredientSeeder::class);
        $this->call(MaterialSeeder::class);
        $this->call(PriceSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ProductStockSeeder::class);
        $this->call(ProductTrxSeeder::class);
        $this->call(PurcasingSeeder::class);
        $this->call(ReciptSeeder::class);
        $this->call(StockSeeder::class);
        $this->call(VariantSeeder::class);
        $this->call(SupplierSeeder::class);
        // $this->call(Supplierseed::class);
    }
}
