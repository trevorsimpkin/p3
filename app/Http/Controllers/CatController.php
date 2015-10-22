<?php

namespace p3\Http\Controllers;

use Illuminate\Http\Request;
use p3\Http\Requests;
use p3\Http\Controllers\Controller;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        return view('Cat.index');
    }
    public function postIndex(Request $request)
    {
        $this->validate($request, [
            'width' => 'required|numeric|min:50|max:800',
            'height' => 'required|numeric|min:50|max:800'
        ]);
        $width = $request->input('width');
        $height = $request->input('height');
        $faker = \Faker\Factory::create();
        $image = $faker->imageUrl($width, $height, 'cats');

        return view('Cat.postindex')->with (['image'=>$image, 'width'=>$width, 'height'=>$height] );
    }

}
