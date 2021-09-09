<?php

use Illuminate\Database\Seeder;

class seeder_menu extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('Menu')->insert([
        	['name' => 'Destination', 'icons'=> 'https://cdn.bimbimbikes.com/images/icons/icon_world.png?v1.1.18', 'id_table'=> 0],
            ['name' => 'Eating Drink', 'icons'=> 'https://www.warwicksu.com/stylesheet/WarwickSU2019/food-drink-icon.png', 'id_table'=> 0],
            ['name' => 'Hotel', 'icons'=> 'https://cdn2.iconfinder.com/data/icons/travel-caramel-vol-1/256/5_STARS_HOTEL-512.png', 'id_table'=> 0],
            ['name' => 'At Night', 'icons'=> 'https://www.stgileshospice.com/wp-content/uploads/2019/09/Snowdon-at-night-icon-v2.png', 'id_table'=> 0],
            ['name' => 'Experience', 'icons'=> 'https://guliker.ca/wp-content/uploads/2018/06/guliker-experience-icon.png', 'id_table'=> 0],
            ['name' => 'Shopping', 'icons'=> 'https://e7.pngegg.com/pngimages/985/202/png-clipart-shopping-bag-icon-orange-shopping-bag-text-logo.png', 'id_table'=> 0],

            ['name' => 'Vehicle', 'icons'=> 'https://img.pngio.com/index-of-service-pic-car-png-circle-945_945.png', 'id_table'=> 1],
            ['name' => 'Parking Lot', 'icons'=> 'https://rubberform.com/wp-content/uploads/2020/02/RF_Vertical-Icon_Parking-Lot-Safety-V2.png', 'id_table'=> 1],
            ['name' => 'Education', 'icons'=> 'https://i.ya-webdesign.com/images/teaching-clip-education-symbol-4.png', 'id_table'=> 1],
            ['name' => 'Embassy', 'icons'=> 'https://cdn.iconscout.com/icon/premium/png-512-thumb/court-10-125437.png', 'id_table'=> 1],
            ['name' => 'Company', 'icons'=> 'https://i7.pngflow.com/pngimage/459/11/png-computer-icons-graphics-chart-sales-best-seller-icon-angle-company-text-orange-clipart.png', 'id_table'=> 1],
            ['name' => 'Health', 'icons'=> 'https://cdn.nhanh.vn/cdn/store1/41050/pc/ps_cate_icon_1550937795_989.png', 'id_table'=> 1],
            ['name' => 'Bank', 'icons'=> 'https://cdn.iconscout.com/icon/premium/png-256-thumb/bank-note-14-479797.png', 'id_table'=> 1],
            ['name' => 'Entertainment', 'icons'=> 'https://cdn3.iconfinder.com/data/icons/point-of-interest-1/96/movie_theater-512.png', 'id_table'=> 1],
             ['name' => 'Organ', 'icons'=> 'https://avt.edu.vn/wp-content/uploads/2018/12/faq-icon.png', 'id_table'=> 1],
        ]);
    }
}
