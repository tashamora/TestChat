<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
       public function run()
    {
        DB::table('users')->insert([
            'id' => '1',
            'name' => 'Пьер Безухов',
            'email' => 'pier@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

       DB::table('users')->insert([
            'id' => '2',
            'name' => 'Наташа Ростова',
            'email' => 'natasha@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

       DB::table('users')->insert([
            'id' => '3',
            'name' => 'Андрей Болконский',
            'email' => 'andrey@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

       DB::table('users')->insert([
            'id' => '4',
            'name' => 'Элен Курагина',
            'email' => 'elen@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
 }
