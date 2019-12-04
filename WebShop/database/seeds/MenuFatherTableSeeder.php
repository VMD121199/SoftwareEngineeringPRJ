<?php

use Illuminate\Database\Seeder;

class MenuFatherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu_father')->insert([
            ['nameMenuFather'=>'Thú Cưng'],
            ['nameMenuFather'=>'Điện Thoại'],
            ['nameMenuFather'=>'LapTop'],
            ['nameMenuFather'=>'Bất Động Sản'],
            ['nameMenuFather'=>'Đồ Gia Dụng'],
            ['nameMenuFather'=>'Đồ Văn Phòng'],
            ['nameMenuFather'=>'Xe Cộ'],
            ['nameMenuFather'=>'Thời Trang, Đồ Dùng Cá Nhân'],
            ['nameMenuFather'=>'Giải Trí, Thể Thao'],
            ['nameMenuFather'=>'Mẹ và Bé'],
            ['nameMenuFather'=>'Đồ Điện'],
            ['nameMenuFather'=>'Các Loại Khác'],

        ]);
    }
}
