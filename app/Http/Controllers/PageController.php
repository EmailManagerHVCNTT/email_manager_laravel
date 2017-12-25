<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        return view('pages.home');
    }

    public function getLogin(){
        // return view('pages.login');
    }

    public function getCreateEmail(){
        // return view('pages.create-email');
    }

}
