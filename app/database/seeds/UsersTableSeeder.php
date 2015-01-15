<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
                'id' => 1,
                'email' => 'asullivan@douglas.nv.gov',
                'password' => Hash::make('asullivan'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'activated' => 1,
                'first_name' => 'Anthony',
                'last_name' => 'Sullivan',
        ));
        User::create(array(
                'id' => 2,
                'email' => 'petitionman@gmail.com',
                'password' => Hash::make('steved'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'activated' => 1,
                'first_name' => 'Steve',
                'last_name' => 'Drattell',
        ));
    }
}