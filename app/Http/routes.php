<?php
use eloquent\User;
use Faker\Factory as Faker;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
   
   
   return 'BaBita';
});


Route::get('create', function () {
    
    $faker= Faker::create();
    
   $user = User::create ([
       'name' => $faker->firstName,
       'email' =>$faker->email,
       'password' => bcrypt ('137525627jinmy'),
       'gender' => $faker->randomElement(['f','m']),
       'biography' => $faker->text(200)
       
   ]) ;
   
   return $user;
});


Route::get('read/{id}', function ($id) {
    
    $user = User::find ($id);
       return $user; 
     ;
   
   
});



Route::get('delete/{id}', function ($id) {
    
    $user = User::find ($id);
    $user->delete(); 
    return 'usuario elim';
   
   
});