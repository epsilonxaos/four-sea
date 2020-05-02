<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class IdiomaController extends Controller
{
    public function swap($lang)
    {
        // Almacenar el lenguaje en la session
        Session::put('lang', $lang);
        return redirect()->back();
    }
}
