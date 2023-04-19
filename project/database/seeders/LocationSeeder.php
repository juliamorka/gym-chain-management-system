<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $loc = new Location();
        $loc->street = "Krakowska";
        $loc->street_no = "59";
        $loc->city = "Warszawa";
        $loc->phone_no = "+48 662 399 237";
        $loc->image = "https://www.hussle.com/blog/wp-content/uploads/2020/12/Gym-structure-1080x675.png";
        $loc->save();

        $loc = new Location();
        $loc->street = "Miodowa";
        $loc->street_no = "34";
        $loc->city = "Kraków";
        $loc->phone_no = "+48 592 564 882";
        $loc->image = "https://images.unsplash.com/photo-1534438327276-14e5300c3a48?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8Z3ltfGVufDB8fDB8fA%3D%3D&w=1000&q=80";
        $loc->save();

        $loc = new Location();
        $loc->street = "Lubelska";
        $loc->street_no = "12";
        $loc->city = "Warszawa";
        $loc->phone_no = "+48 827 321 532";
        $loc->image = "https://assets.website-files.com/5bf05334017c212448095927/60016869939b1c17a239f2f1_fitness-plus-gym.jpg";
        $loc->save();
    }
}
