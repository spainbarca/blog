<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::truncate();

        $user=new User;
        $user->name = 'Jorge Luis';
        $user->email= 'test@test.com';
        $user->password = bcrypt('Test2022@');

        $user->save();
    }
}
