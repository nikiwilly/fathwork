<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Mass Admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('1234567')
            ],
            [
                'name' => 'Mass Industri',
                'email' => 'industri@gmail.com',
                'role' => 'industri',
                'password' => bcrypt('1234567')
            ],
            [
                'name' => 'Mass Sekolah',
                'email' => 'sekolah@gmail.com',
                'role' => 'sekolah',
                'password' => bcrypt('1234567')
            ],
            [
                'name' => 'Mass User',
                'email' => 'user@gmail.com',
                'role' => 'user',
                'password' => bcrypt('1234567')
            ],
        ];
        foreach ($userData as $key => $val ){
            User::create($val);
        }
    }
}
