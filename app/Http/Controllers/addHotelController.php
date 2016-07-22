<?php

namespace App\Http\Controllers;

use App\hotel;
use Request;
use App\Http\Requests;

class addHotelController extends Controller
{

    /* addPropertyButton brings the user to the addHotel form, its like create() */
    public function addHotel(){

        return view('addHotel');

    }

    public function index(){

        $article = hotel::all();

        return view('index', compact('article'));

    }


    /* storing data into our database from the form */
    public function store(){

        $input = Request::all();

        hotel::create($input);

        return redirect('home');
    }

}
