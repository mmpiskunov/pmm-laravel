<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfile extends Controller
{
    public function index () {
        return view('index');
    }

    public function create () {
        return view('add');
    }

    public function store (Request $request) {
        dd($request);
    }
}
