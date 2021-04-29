<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\VaiTro;

class VaiTroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VaiTro::firstOrCreate([
            'ten' => 'Quản trị viên cấp cao'
        ]);

        VaiTro::firstOrCreate([
            'ten' => 'Quản trị viên'
        ]);

        VaiTro::firstOrCreate([
            'ten' => 'Khách hàng'
        ]);
    }
}
