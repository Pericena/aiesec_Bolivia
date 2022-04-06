<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Cayolasoft';
        $user->email = 'cayolasoft@gmail.com';
        $user->password = bcrypt('@FerLuiChiMogi');
        $user->save();
        $user->assignRole('superuser');
    }
}
