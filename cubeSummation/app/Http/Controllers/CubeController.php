<?php

namespace App\Http\Controllers;

use Request;

class CubeController extends Controller
{
    public function index()
    {

        return view('cube.index');
    }

    public function execute(Request $request)
    {
        $output = Request::input('input');
        return response()->json(['output' => $output]);

    }
}
