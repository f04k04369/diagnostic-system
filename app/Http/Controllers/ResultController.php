<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function result(Request $request) {
        $point_1 = $request->point_1;
        $point_2 = $request->point_2;
        $point_3 = $request->point_3;
        $point_4 = $request->point_4;
        $point_5 = $request->point_5;
        $point_6 = $request->point_6;
        $point_7 = $request->point_7;
        $point_8 = $request->point_8;
        $point_9 = $request->point_9;
        $point_10 = $request->point_10;
        $phase_1 = $point_1 + $point_2 + $point_3;
        $phase_2 = $point_4 + $point_5 + $point_6;
        $phase_3 = $point_7 + $point_8 + $point_9;
        $phase_4 = $point_2 + $point_3 + $point_9 + $point_10;
        $total_point = $point_1 + $point_2 + $point_3 + $point_4 + $point_5 + $point_6 + $point_7 + $point_8 + $point_9 + $point_10;


        $result_data = [
            'point_1' => $point_1,
            'point_2' => $point_2,
            'point_3' => $point_3,
            'point_4' => $point_4,
            'point_5' => $point_5,
            'point_6' => $point_6,
            'point_7' => $point_7,
            'point_8' => $point_8,
            'point_9' => $point_9,
            'point_10' => $point_10,
            'phase_1' => $phase_1,
            'phase_2' => $phase_2,
            'phase_3' => $phase_3,
            'phase_4' => $phase_4,
            'total_point' => $total_point,
        ];

        

        return view('diagnostic/result', $result_data);
    }
}
