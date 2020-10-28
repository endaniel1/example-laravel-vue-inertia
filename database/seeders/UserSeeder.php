<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::factory()->create([
    		'name' => 'Enrique Rodriguez',
    		'email' => 'enriq_1997@hotmail.com',
    		'email_verified_at' => now(),
    		'password' => bcrypt('123456'),
        ]);
        
        User::factory()
            ->times(10)
            ->create();
    }
}
