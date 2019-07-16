<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'fname'=>'amr',
            'lname'=>'muhamed',
            'email'=>'amrmuhamed9@gmail.com',
            'type_user'=>'admin',
            'status'=>'active',
            'password'=>bcrypt(12345678),
        ]);
    }
}
