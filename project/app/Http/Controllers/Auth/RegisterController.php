<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    //use RegistersUsers;

    public function create(): View
    {
        return view('auth.register');
    }

    public function store(Request $request): View
    {
        $request->validate( [
            'name' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'max:20'],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'location_id' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        
        $image_name = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $image_name);

        $user = User::create([
            'name' => $request->name,
            'role' => $request->role,
            'profile_pic' => "images/" . $image_name,
            'location_id' => $request->location_id,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        return view('auth.added');
    }
}
