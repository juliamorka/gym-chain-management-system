<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "David Wallace";
        $user->email = "david.wallace@gmail.com";
	$user->password = bcrypt("password123");
	$user->role = "CEO";
	$user->save();

	$user = new User();
        $user->name = "Michael Scott";
        $user->email = "michael.scott@gmail.com";
        $user->password = bcrypt("password123");
        $user->role = "Regional manager";
        $user->save();

	$user = new User();
        $user->name = "Jim Halpert";
        $user->email = "jim.halpert@gmail.com";
        $user->password = bcrypt("password123");
        $user->role = "Regular employee";
        $user->save();

	$user = new User();
        $user->name = "Darryl Philbin";
        $user->email = "darryl.philbin@gmail.com";
        $user->password = bcrypt("password123");
        $user->role = "Warehouse worker";
        $user->save();

	$user = new User();
        $user->name = "Pam Beesly";
        $user->email = "pam.beesly@gmail.com";
        $user->password = bcrypt("password123");
        $user->role = "Receptionist";
        $user->save();

	$user = new User();
        $user->name = "Angela Martin";
        $user->email = "angela.martin@gmail.com";
        $user->password = bcrypt("password123");
        $user->role = "Accountant";
        $user->save();

    }
}
