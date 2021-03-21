<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.index');
    }

    public function employers(Request $request)
    {
        return view('pages.employers');
    }
}
