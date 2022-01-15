<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupervisiController extends Controller
{
    public function supervisi()
    {
        return view(' layout.include.fitur.supervisi');
    }
}
