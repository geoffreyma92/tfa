<?php

class UsersTableSeeder extends Seeder{
  public function run(){
    //Use to clear the information in the table
    DB::table('users')->delete();
    
    //populating data into the tables.
    $users = array(
      array(
        'name' => 'Terry',
        'password' => Hash::make('terry'),
        'email' => 'example@example.com'
      )
    );
    
    //insert the predefined data into 'users' database
    DB::table('users')->insert($users);
  }
}