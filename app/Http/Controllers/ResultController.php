<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function result(Request $request) {
        return view('diagnostic/result');
    }
}
