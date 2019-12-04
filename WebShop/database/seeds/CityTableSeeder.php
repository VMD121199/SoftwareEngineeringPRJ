<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('city')->insert([
            ['nameCity'=>'An Giang'],
            ['nameCity'=>'Bà Rịa - Vũng Tàu'],
            ['nameCity'=>'Bắc Giang'],
            ['nameCity'=>'Bắc Kạn'],
            ['nameCity'=>'Bạc Liêu'],
            ['nameCity'=>'Bắc Ninh'],
            ['nameCity'=>'Bến Tre'],
            ['nameCity'=>'Bình Định'],
            ['nameCity'=>'Bình Dương'],
            ['nameCity'=>'Bình Phước'],
            ['nameCity'=>'Bình Thuận'],
            ['nameCity'=>'Cà Mau'],
            ['nameCity'=>'Cao Bằng'],
            ['nameCity'=>'Cần Thơ'],
            ['nameCity'=>'Đà Nẵng'],
            ['nameCity'=>'Đắk LắK'],
            ['nameCity'=>'Đắk Nông'],
            ['nameCity'=>'Điện Biên'],
            ['nameCity'=>'Đồng Nai'],
            ['nameCity'=>'Đồng Tháp'],
            ['nameCity'=>'Gia Nai'],
            ['nameCity'=>'Hà Giang '],
            ['nameCity'=>'Hà Nam'],
            ['nameCity'=>'Hà Nội'],
            ['nameCity'=>'Hà Tĩnh'],
            ['nameCity'=>'Hải Dương'],
            ['nameCity'=>'Hải Phòng'],
            ['nameCity'=>'Hậu Giang'],
            ['nameCity'=>'Hoà Bình'],
            ['nameCity'=>'Hưng Yên'],
            ['nameCity'=>'Khánh Hoà'],
            ['nameCity'=>'Kiên Giang'],
            ['nameCity'=>'Kon Tum'],
            ['nameCity'=>'Lai Châu'],
            ['nameCity'=>'Lâm Đồng'],
            ['nameCity'=>'Lạng Sơn'],
            ['nameCity'=>'Lào Cai'],
            ['nameCity'=>'Long An'],
            ['nameCity'=>'Nam Định'],
            ['nameCity'=>'Nghệ An'],
            ['nameCity'=>'Ninh Bình'],
            ['nameCity'=>'Ninh Thuận'],
            ['nameCity'=>'Phú Thọ'],
            ['nameCity'=>'Quảng Bình'],
            ['nameCity'=>'Quảng Nam'],
            ['nameCity'=>'Quảng Ngãi'],
            ['nameCity'=>'Quảng Ninh'],
            ['nameCity'=>'Quảng Trị'],
            ['nameCity'=>'Sóc Trăng'],
            ['nameCity'=>'Sơn La'],
            ['nameCity'=>'Tây Ninh'],
            ['nameCity'=>'Thái Bình'],
            ['nameCity'=>'Thái Nguyên'],
            ['nameCity'=>'Thanh Hoá'],
            ['nameCity'=>'Thừa Thiên Huế'],
            ['nameCity'=>'Tiền Giang'],
            ['nameCity'=>'Trà Vinh'],
            ['nameCity'=>'Tuyên Quang'],
            ['nameCity'=>'Vĩnh Long'],
            ['nameCity'=>'Vĩnh Phúc'],
            ['nameCity'=>'Yên Bái'],
            ['nameCity'=>'Phú Yên'],
            ['nameCity'=>'Hồ Chí Minh'],


        ]);
    }
}
