<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\QuanTriVien;
use Illuminate\Support\Facades\Hash;

class QuanTriVienCapCaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        QuanTriVien::firstOrCreate(
            ['ten_tai_khoan' => 'super_admin'],
            [
                'mat_khau'      => Hash::make('admin@123'),
                'vai_tro_id'    => 1,
                'ten'           => 'Quản trị viên cấp cao'
            ]
        );
    }
}
