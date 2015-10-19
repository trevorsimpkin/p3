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
    $faker = \Faker\Factory::create();
    $users = array();
    for ($i=0; $i<$numberOfUsers; $i++)
    {
        array_push($users, $faker->name);
    }

    return view('RandomUser.postIndex')->with (['users'=>$users] );
    }


}
