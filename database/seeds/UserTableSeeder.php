<?php

use Illuminate\Database\Seeder;
use eloquent\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class,100)->create();
    }
}
