<?php

namespace App\Http\Controllers;

use App\Http\Requests;

class CubeController extends Controller
{
    public function index()
    {

        return view('cube.index');
    }
}
