<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
   
    public function testUser(){

        // $user = new User();
        // $user->username = "mahadidn";
        // $user->name = "mahadi";
        // $user->email = "mahadi@gmail.com";
        // $user->password = bcrypt("mahadi123");
        // $result = $user->save();
        // self::assertTrue($result);

        
        // $user = new User();
        // $user->username = "user123";
        // $user->name = "user2";
        // $user->email = "user2@gmail.com";
        // $user->password = bcrypt("user123");
        // $result = $user->save();
        // self::assertTrue($result);

        $a = User::create([
            'username' => "mahadiasd",
            'name' => 'hadi',
            'email' => 'mahadidwinugrahasda@gmail.com',
            'password' => bcrypt('mahadi123')
        ]);
        self::assertTrue($a);

        // // dd($user->all());
        // $user = $user->where('name', 'mahadi')->get();
        // dd($user[0]->email);
    }


}
