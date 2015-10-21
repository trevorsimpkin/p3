<?php

namespace p3\Http\Controllers;

use Illuminate\Http\Request;
use p3\Http\Requests;
use p3\Http\Controllers\Controller;

class RandomUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        return view('RandomUser.index');
    }
    public function postIndex(Request $request)
    {
    $this->validate($request, [
        'numberOfUsers' => 'required|numeric|min:0'
    ]);
    $numberOfUsers = $request->input('numberOfUsers');
    $isEmail = $request->input('email');
    $isPhone = $request->input('phone');
    $isUsername = $request->input('username');
    $isPassword = $request->input('password');
    $faker = \Faker\Factory::create();
    $users = array();
    $emails = array();
    $phones = array();
    $usernames = array();
    $passwords = array();
    for ($i=0; $i<$numberOfUsers; $i++) {
        array_push($users, $faker->name);
    }
    if ($isEmail) {
        for ($i=0; $i<$numberOfUsers; $i++) {
            array_push($emails, $faker->email);
        }
    }
    if ($isPhone) {
        for ($i=0; $i<$numberOfUsers; $i++) {
            array_push($phones, $faker->phoneNumber);
        }
    }
    if ($isUsername) {
        for ($i=0; $i<$numberOfUsers; $i++) {
            array_push($usernames, $faker->userName);
        }
    }
    if ($isPassword) {
        for ($i=0; $i<$numberOfUsers; $i++) {
            array_push($passwords, $faker->password);
        }
    }
        return view('RandomUser.postindex')->with (['users'=>$users, 'emails'=>$emails, 'phones'=>$phones, 'usernames'=>$usernames, 'passwords'=>$passwords]);
    }


}
