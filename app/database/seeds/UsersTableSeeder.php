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
        User::create(array(
                'id' => 3,
                'email' => 'sd1',
                'password' => Hash::make('sd1'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'activated' => 1,
                'first_name' => 'SDGuest',
                'last_name' => '1',
        ));
        User::create(array(
                'id' => 4,
                'email' => 'sd2',
                'password' => Hash::make('sd2'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'activated' => 1,
                'first_name' => 'SDGuest',
                'last_name' => '2',
        ));
        User::create(array(
                'id' => 5,
                'email' => 'sd3',
                'password' => Hash::make('sd3'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'activated' => 1,
                'first_name' => 'SDGuest',
                'last_name' => '3',
        ));
        User::create(array(
                'id' => 6,
                'email' => 'sd4',
                'password' => Hash::make('sd4'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'activated' => 1,
                'first_name' => 'SDGuest',
                'last_name' => '4',
        ));
        User::create(array(
                'id' => 7,
                'email' => 'lk1',
                'password' => Hash::make('lk1'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'activated' => 1,
                'first_name' => 'Lorianne',
                'last_name' => 'Kaserman',
        ));
        User::create(array(
                'id' => 8,
                'email' => 'dk1',
                'password' => Hash::make('dk1'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'activated' => 1,
                'first_name' => 'David',
                'last_name' => 'Kaserman',
        ));
        User::create(array(
                'id' => 9,
                'email' => 'lk2',
                'password' => Hash::make('lk2'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'activated' => 1,
                'first_name' => 'LKGuest',
                'last_name' => '1',
        ));
        User::create(array(
                'id' => 10,
                'email' => 'lk3',
                'password' => Hash::make('lk3'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'activated' => 1,
                'first_name' => 'LKGuest',
                'last_name' => '2',
        ));
    }
}