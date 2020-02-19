<?php

use App\User;
use Illuminate\Database\Seeder;

class UserDemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'email' => 'jason@pureconcepts.net',
            'administrator' => true
        ]);

        factory(User::class)->create([
            'email' => 'user@furryumbrella.com',
            'administrator' => false
        ]);
    }
}
