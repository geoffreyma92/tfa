<?php

class ItemsTableSeeder extends Seeder{
  public function run(){
    //Use to clear the information in the table
    DB::table('items')->delete();
    
    //populating data into the tables.
    $items = array(
      array(
        'owner_id' => 1,
        'name' => 'Pick up milk',
        'done' => false
      ),
      
      array(
        'owner_id' => 1,
        'name' => 'Walk the dog',
        'done' => true
      ),
      
      array(
        'owner_id' => 1,
        'name' => 'Cook dinner',
        'done' => false
      )
      
    );
    
    //insert the predefined data into 'users' database
    DB::table('items')->insert($items);
  }
}