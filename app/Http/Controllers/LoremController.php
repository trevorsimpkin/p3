<?php

namespace p3\Http\Controllers;

use Illuminate\Http\Request;
use p3\Http\Requests;
use p3\Http\Controllers\Controller;

class LoremController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        return view('LoremIpsum.index');
    }
    public function postIndex(Request $request)
    {
        $this->validate($request, [
            'paragraphs' => 'required|numeric'
        ]);
        $paragraphs = $request->input('paragraphs');
        $faker = \Faker\Factory::create();
        $text = $faker->paragraphs($nb = $paragraphs);

        return view('LoremIpsum.postindex')->with (['text'=>$text] );
    }

}
