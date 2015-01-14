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
                'email' => 'ljordan@douglas.nv.gov',
                'password' => Hash::make('ljordan'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'activated' => 1,
                'first_name' => 'Joe',
                'last_name' => 'Smoe',
        ));
        User::create(array(
                'id' => 3,
                'email' => 'lkeith@douglas.nv.gov',
                'password' => Hash::make('lkeith'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'activated' => 1,
                'first_name' => 'Lesley',
                'last_name' => 'Keith',
        ));
    }
}