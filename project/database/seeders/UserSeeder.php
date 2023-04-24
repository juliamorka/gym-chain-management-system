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
        $user->location_id = 1;
        $user->image ='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3vL5_NhwKz9SQfEThMtZ-gfD1z3Ho0OXhyw&usqp=CAU';
	    $user->save();

	$user = new User();
        $user->name = "Michael Scott";
        $user->email = "michael.scott@gmail.com";
        $user->password = bcrypt("password123");
        $user->role = "Regional manager";
        $user->location_id = 1;
        $user->image ='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3vL5_NhwKz9SQfEThMtZ-gfD1z3Ho0OXhyw&usqp=CAU';
        $user->save();

	$user = new User();
        $user->name = "Jim Halpert";
        $user->email = "jim.halpert@gmail.com";
        $user->password = bcrypt("password123");
        $user->role = "Regular employee";
        $user->location_id = 1;
        $user->image ='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3vL5_NhwKz9SQfEThMtZ-gfD1z3Ho0OXhyw&usqp=CAU';
        $user->save();

	$user = new User();
        $user->name = "Darryl Philbin";
        $user->email = "darryl.philbin@gmail.com";
        $user->password = bcrypt("password123");
        $user->role = "Warehouse worker";
        $user->location_id = 1;
        $user->image ='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3vL5_NhwKz9SQfEThMtZ-gfD1z3Ho0OXhyw&usqp=CAU';
        $user->save();

	$user = new User();
        $user->name = "Pam Beesly";
        $user->email = "pam.beesly@gmail.com";
        $user->password = bcrypt("password123");
        $user->role = "Receptionist";
        $user->location_id = 1;
        $user->image ='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3vL5_NhwKz9SQfEThMtZ-gfD1z3Ho0OXhyw&usqp=CAU';
        $user->save();

	$user = new User();
        $user->name = "Angela Martin";
        $user->email = "angela.martin@gmail.com";
        $user->password = bcrypt("password123");
        $user->role = "Accountant";
        $user->location_id = 1;
        $user->image ='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3vL5_NhwKz9SQfEThMtZ-gfD1z3Ho0OXhyw&usqp=CAU';
        $user->save();

    }
}
