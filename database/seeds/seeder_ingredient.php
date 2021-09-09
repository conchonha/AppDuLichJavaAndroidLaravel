<?php

use Illuminate\Database\Seeder;

class seeder_ingredient extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Ingredient')->insert([
        	['name'=> 'Nature', 'id_menu'=> 1,],
            ['name'=> 'Spirituality', 'id_menu'=> 1,],
            ['name'=> 'World Cultural Heritage', 'id_menu'=> 1,],
            ['name'=> 'Museum', 'id_menu'=> 1,],
            ['name'=> 'Village', 'id_menu'=> 1,],
            ['name'=> 'Cafe', 'id_menu'=> 2,],
            ['name'=> 'Vegetarian', 'id_menu'=> 2,],
            ['name'=> 'Street vendors', 'id_menu'=> 2,],
            ['name'=> 'Specialties local', 'id_menu'=> 2,],
            ['name'=> 'Europe', 'id_menu'=> 2,],
            ['name'=> 'Asian', 'id_menu'=> 2,],
            ['name'=> 'Hotel', 'id_menu'=> 3,],
            ['name'=> 'Boarding house', 'id_menu'=> 3,],
            ['name'=> 'Resort', 'id_menu'=> 3,],
            ['name'=> 'Villa', 'id_menu'=> 3,],
            ['name'=> 'Bar', 'id_menu'=> 4,],
            ['name'=> 'Watch movie', 'id_menu'=> 4,],
            ['name'=> 'Cultural', 'id_menu'=> 5,],
            ['name'=> 'History', 'id_menu'=> 5,],
            ['name'=> 'Tour', 'id_menu'=> 5,],
            ['name'=> 'Souvenirs', 'id_menu'=> 6,],
            ['name'=> 'Handicrafts', 'id_menu'=> 6,],
            ['name'=> 'Footwear', 'id_menu'=> 6,],
            ['name'=> 'Tailor shop', 'id_menu'=> 6,],
            ['name'=> 'Embroidery', 'id_menu'=> 6,],
            ['name'=> 'Bus stop', 'id_menu'=> 7,],
            ['name'=> 'To rent', 'id_menu'=> 7,],
            ['name'=> 'Repair', 'id_menu'=> 7,],
            ['name'=> 'the gas station', 'id_menu'=> 7,],
            ['name'=> 'Airport', 'id_menu'=> 7,],
            ['name'=> 'Station', 'id_menu'=> 7,],
            ['name'=> 'See more', 'id_menu'=> 8,],
            ['name'=> 'Schools', 'id_menu'=> 9,],
            ['name'=> 'University', 'id_menu'=> 9,],
            ['name'=> 'Library', 'id_menu'=> 9,],
            ['name'=> 'See more', 'id_menu'=> 10,],
            ['name'=> 'See more', 'id_menu'=> 11,],
            ['name'=> 'Spa', 'id_menu'=> 12,],
            ['name'=> 'Beauty salon', 'id_menu'=> 12,],
            ['name'=> 'Medical center', 'id_menu'=> 12,],
            ['name'=> 'Gym', 'id_menu'=> 12,],
            ['name'=> 'Dentistry', 'id_menu'=> 12,],
            ['name'=> 'Doctor', 'id_menu'=> 12,],
            ['name'=> 'Hospital', 'id_menu'=> 12,],
            ['name'=> 'Drug store', 'id_menu'=> 12,],
            ['name'=> 'Bank', 'id_menu'=> 13,],
            ['name'=> 'ATM', 'id_menu'=> 13,],
            ['name'=> 'Entertainment centre', 'id_menu'=> 14,],
            ['name'=> 'Exhibition room', 'id_menu'=> 14,],
            ['name'=> 'Watch movie', 'id_menu'=> 14,],
            ['name'=> 'Park', 'id_menu'=> 14,],
            ['name'=> 'Stadium', 'id_menu'=> 14,],
            ['name'=> 'Karaoke', 'id_menu'=> 14,],
            ['name'=> 'Zoo', 'id_menu'=> 14,],
            ['name'=> 'See more', 'id_menu'=> 15,],

        ]);

    }
}
