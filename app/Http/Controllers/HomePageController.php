<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    //This index funcation will return our home page of application
    public function index()
    {
        return view('homepage');
    }
}
