<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class HomeController extends Controller
{
    public function index() {
        $dress_list = Dress::all();
        $data = [
            'dresses' => $dress_list
        ];
        // dd($dress_list);
        return view('home', $data);
    }

    public function test() {
        return view('testpage');
    }
}
