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
        'numberOfUsers' => 'required|numeric'
    ]);
    $numberOfUsers = $request->input('numberOfUsers');
    $isEmail = $request->input('email');
    $isPhone = $request->input('phone');
    $isUsername = $request->input('username');
    $isPassword = $request->input('password');
    $faker = \Faker\Factory::create();
    $users = array();
        $email = array();
    for ($i=0; $i<$numberOfUsers; $i++)
    {
        array_push($users, $faker->name);
        if ($isEmail) {
        array_push($users, $faker->email);
        }
        if ($isPhone) {
            array_push($users, $faker->phoneNumber);
        }
        if ($isUsername) {
            array_push($users, $faker->userName);
        }
        if ($isPassword) {
            array_push($users, $faker->password);
        }
    }
    return view('RandomUser.postindex')->with (['users'=>$users]);
    }


}
