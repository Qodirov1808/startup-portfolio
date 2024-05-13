<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();
        if(!$user){
            User::create([
                'name' => 'username',
                'role' => 'super',
                'email' => 'muhtorjon@mail.com',
                'password' => bcrypt('12345678'),
            ]);

        }else{
            $user->update([
                'name' => 'username',
                'role' => 'super',
                'email' => '1234567',
                'password' => bcrypt('12345678'),
            ]);
        }
    }
}
