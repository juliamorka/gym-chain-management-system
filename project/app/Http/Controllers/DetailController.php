<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function details()
    {
        $locations = Location::all();
        return view('details')->with('locations', $locations);
    }
}
