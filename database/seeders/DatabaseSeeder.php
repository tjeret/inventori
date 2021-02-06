<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        \App\Models\Product::factory(15)->create();
        \App\Models\ProductStock::factory(15)->create();
        \App\Models\ProductType::factory(15)->create();
        \App\Models\PriceList::factory(15)->create();
        $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(ProfilSeeder::class);
        // $this->call(Supplierseed::class);
    }
}
