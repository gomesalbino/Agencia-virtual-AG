<?php

namespace App\Http\Controllers;


class StartappController extends Controller
{
    public function index()
    {
        return view('layouts.main');
    }
}

