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
        $faker = Faker\Factory::create();
        $seededAdminEmail = 'admin@admin.com';
        $user = User::where('email', '=', $seededAdminEmail)->first();
        if ($user === null) {
            $user = User::create([
                'name'      => $faker->userName,
                'email'     => $seededAdminEmail,
                'password'  => Hash::make('password'),
                'is_admin'  => 1,
            ]);
            $user->save();
        }
    }
}
