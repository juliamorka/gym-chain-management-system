<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuppliesController extends Controller
{
    public function supplies()
    {
        $stock = Stock::all();
        return view('supplies')->with('stock', $stock);
    }

    public function add_supplies(Request $request){

        $request->validate( [
            'item' => ['required', 'string'],
            'quantity' => ['required', 'numeric', 'min:1'],
        ]);

        $curr_supply = Stock::where('item', $request->item)->where('location_id', $request->user()->location_id)->first();

        if(!is_null($curr_supply)) {
            Stock::where('item', $request->item)->where('location_id', $request->user()->location_id)->update(array(
                'count' => $request->quantity + $curr_supply->count
            ));
        }
        else {
            $supply = new Stock([
                'item' => $request->item,
                'count' => $request->quantity,
                'location_id' => $request->user()->location_id
            ]);
            $supply->save();
        }

        return view('auth.supply_added');
    }
}
