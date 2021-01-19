<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class HomeController extends Controller
{
    public function index() {
        $dress_list = Dress::all();
        dd($dress_list);
        return view('home', $dress_list);
    }

    public function test() {
        return view('testpage');
    }
}
