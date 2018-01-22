<?php

namespace App\Service;
use App\User;
class UserService
{
    public static function create($name,$email,$password)
    {
        $data=array(
            'name'=>$name,
            'email'=>$email,
            'password'=>$password,
        );
        $user=User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
        return $user;
    }
}