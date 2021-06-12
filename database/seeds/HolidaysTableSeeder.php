<?php

use Illuminate\Database\Seeder;
use App\Holiday;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            //CREAZIONE ISTANZA
            $new_holiday = new Holiday();

            //POPOLAZIONE COLONNE
            $new_holiday->location = 'Roma';
            $new_holiday->description = 'Lorem ipsum description';
            $new_holiday->price = rand(100, 1000);
            $new_holiday->start = '29-06-2021';
            $new_holiday->end = '15-07-2021';

            //SALVARE RECORD DB
            $new_holiday->save();
        }
    }
}
