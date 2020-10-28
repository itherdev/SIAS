<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        DB::table('users')->insert([
            'name' => "Istiharoh",
            'username' => "master",
            'email' => "admin@zoho.com",
            'email_verified_at' => now(),
            'password' => '$2y$10$plbNRGHWZJKHkpLP1Z8uOuO2fGtEw.epDzmtRhk9QNqy4V.J6gspK' // 123456
=======
        //
        DB::table('users')->insert([
          'name' => "Istiharoh",
          'username' => "master",
          'email' => "admin@zoho.com",
          'email_verified_at' => now(),
          'password' => '$2y$10$plbNRGHWZJKHkpLP1Z8uOuO2fGtEw.epDzmtRhk9QNqy4V.J6gspK' // 123456
>>>>>>> 5180c9cc871de2aebb0ab5206d3f2b74d046d4b3
        ]);
    }
}
