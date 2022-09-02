<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * ホーム画面アクセス
     * 
     * @param Request $request
     * @return Response
     */
    public function home(Request $request){
        return view('diagnostic.home');
    }
}
