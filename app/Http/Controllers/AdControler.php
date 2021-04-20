<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdControler extends Controller
{
    public function create()
    {
        return view('create');
    }
}
