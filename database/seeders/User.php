<?php

namespace Database\Seeders;

use App\Models\Auth;
use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Auth::create([
            'username' => 'irfan',
            'password' => '123',
        ]);
    }
}
