<?php

namespace Database\Seeders;

use App\Models\Stock;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StockSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $stock = new Stock();
        $stock->item = "Treadmill";
        $stock->count = "6";
        $stock->save();
        
        $stock = new Stock();
        $stock->item = "Exercise ball";
        $stock->count = "10";
        $stock->save();

		$stock = new Stock();
        $stock->item = "Weights";
        $stock->count = "15";
        $stock->save();
    }
}
