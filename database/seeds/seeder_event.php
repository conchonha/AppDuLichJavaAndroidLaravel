<?php

use Illuminate\Database\Seeder;

class seeder_event extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        php artisan make:seed seeder_place tạo seeder
        php artisan db:seed // chạy tất cả seeder
        php artisan db:seed --class= seeder_event chạy riêng từng file
        */
    	$img = "https://www.baodanang.vn/dataimages/202006/original/images1564178_nang_nong.jpg";
    	$description = "Trong tiết trời nắng nóng gần 40oC, công nhân lao động tại các công trình xây dựng, công nhân vệ sinh môi trường... vẫn miệt mài làm việc để kịp tiến độ, làm sạch phố phường, chống ô nhiễm; học sinh vẫn đến trường học tập. Để bảo đảm sức khỏe cho người la";
        DB::table('Event')->insert([
        	['name'=> 'Bảo đảm học tập, làm việc trong mùa nóng', 'image'=> $img, 'description'=> $description]
        ]);
    }
}
