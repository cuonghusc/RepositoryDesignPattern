<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'      => 'Cường',
            'password'  => Hash::make('123'),
            'email'     => 'cuonghusc@gmail.com',
            'address'   => 'Huế',
            'birthday'  => '1997-10-12'
        ]);
    }
}
