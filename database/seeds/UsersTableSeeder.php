<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $user1 = new User();
    	$user1->email = 'user1@codeup.com';
    	$user1->name = 'Jane Doe';
    	$user1->password = Hash::make('password123');
    	$user1->save();

    	$user2 = new User();
    	$user2->email = 'user2@codeup.com';
    	$user2->name = 'Cindi Lauper';
    	$user2->password = Hash::make('password123');
    	$user2->save();

    	$user3 = new User();
    	$user3->email = 'user3@codeup.com';
    	$user3->name = 'Mary Smith';
    	$user3->password = Hash::make('password123');
    	$user3->save();

    	$user4 = new User();
    	$user4->email = 'user4@codeup.com';
    	$user4->name = 'Concepcion Alez';
    	$user4->password = Hash::make('password123');
    	$user4->save();

    	$user5 = new User();
    	$user5->email = 'user5@codeup.com';
    	$user5->name = 'Omar Abed';
    	$user5->password = Hash::make('password123');
    	$user5->save();

    	$user6 = new User();
    	$user6->email = 'user6@codeup.com';
    	$user6->name = 'Daniel Romo';
    	$user6->password = Hash::make('password123');
    	$user6->save();

    	$user7 = new User();
    	$user7->email = 'user7@codeup.com';
    	$user7->name = 'Joseph Gallegos';
    	$user7->password = Hash::make('password123');
    	$user7->save();

    	$user8 = new User();
    	$user8->email = 'user8@codeup.com';
    	$user8->name = 'Linda Silva';
    	$user8->password = Hash::make('password123');
    	$user8->save();

    	$user9 = new User();
    	$user9->email = 'user9@codeup.com';
    	$user9->name = 'Ashley McDonald';
    	$user9->password = Hash::make('password123');
    	$user9->save();

    	$user10 = new User();
    	$user10->email = 'user10@codeup.com';
    	$user10->name = 'Patty Guerrero';
    	$user10->password = Hash::make('password123');
    	$user10->save();
    }
}
