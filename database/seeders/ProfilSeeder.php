<?php

namespace Database\Seeders;

use App\Models\Profil;
use Illuminate\Database\Seeder;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new Profil();
        $data->user_id = 1;
        $data->name = 'Nama Se-Orang admin';
        $data->phone = 9;
        $data->save();

        $data = new Profil();
        $data->user_id = 2;
        $data->name = 'Nama Se-Orang Supervisor';
        $data->phone = 9;
        $data->save();

        $data = new Profil();
        $data->user_id = 3;
        $data->name = 'Nama Se-Orang Keuangan';
        $data->phone = 9;
        $data->save();

        $data = new Profil();
        $data->user_id = 4;
        $data->name = 'Nama Se-Orang Accounting';
        $data->phone = 9;
        $data->save();

        $data = new Profil();
        $data->user_id = 5;
        $data->name = 'Nama Se-Orang kasir';
        $data->phone = 9;
        $data->save();

        $data = new Profil();
        $data->user_id = 6;
        $data->name = 'Nama Se-Orang Gudang';
        $data->phone = 9;
        $data->save();

        $data = new Profil();
        $data->user_id = 7;
        $data->name = 'Nama Se-Orang Produksi';
        $data->phone = 9;
        $data->save();

        $data = new Profil();
        $data->user_id = 8;
        $data->name = 'Nama Se-Orang Marketing';
        $data->phone = 9;
        $data->save();
    }
}
