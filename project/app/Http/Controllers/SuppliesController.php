<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class SuppliesController extends Controller
{
    public function supplies()
    {
        $stock = Stock::all();
        return view('supplies')->with('stock', $stock);
    }
}
