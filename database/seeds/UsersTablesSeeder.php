<?php

use Illuminate\Database\Seeder;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'    => 'test',
            'surname' => 'test',
            'email'    => 'test',
            'password'   =>  'test',
        ]);
    }
}
