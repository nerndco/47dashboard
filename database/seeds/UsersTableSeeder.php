<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();


        $adminRole = Role::where('name', 'admin')->first();
        $authorRole = Role::where('name', 'author')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
        	'name' => 'Marko',
        	'email' => 'marko@nernd.co',
        	'password' => bcrypt('marko')
        ]);

        $admin2 = User::create([
            'name' => 'Branko',
            'email' => 'branko@nernd.co',
            'password' => bcrypt('branko')
        ]);

        $admin3 = User::create([
            'name' => 'Brad',
            'email' => 'brad@nernd.co',
            'password' => bcrypt('brad')
        ]);


        $author = User::create([
        	'name' => 'Author',
        	'email' => 'author@nernd.co',
        	'password' => bcrypt('author')
        ]);

        $user = User::create([
        	'name' => 'User',
        	'email' => 'user@nernd.co',
        	'password' => bcrypt('password'),
            'group' => 'spotx'
        ]);

        $user2 = User::create([
            'name' => 'User 2',
            'email' => 'user2@nernd.co',
            'password' => bcrypt('password'),
            'group' => 'openx'
        ]);


        $admin->roles()->attach($adminRole);
        $admin2->roles()->attach($adminRole);
        $admin3->roles()->attach($adminRole);
        $author->roles()->attach($authorRole);
        $user->roles()->attach($userRole);
        $user2->roles()->attach($userRole);


    }
}
