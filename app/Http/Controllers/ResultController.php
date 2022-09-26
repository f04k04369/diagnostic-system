<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;
use App\Models\Question;
use App\Models\User;


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

        session([
            'result_data' => $result_data,
        ]);
        

        return view('diagnostic/result', $result_data);
    }

    public function form(Request $request) {
        // フォーム入力されたユーザーデータをDBへ保存する処理
        $user = new User();
        $user->company_name = $request->company_name;
        $user->name = $request->name;
        $user->email = $request->email;
        // $user->save();

        // セッションで値を保持していた回答結果をDBへ渡す処理
        $result_data = session()->get('result_data');
        $result = new Result();
        $result->point_1 = $result_data->point_1;
        $result->point_2 = $result_data->point_2;
        $result->point_3 = $result_data->point_3;
        $result->point_4 = $result_data->point_4;
        $result->point_5 = $result_data->point_5;
        $result->point_6 = $result_data->point_6;
        $result->point_7 = $result_data->point_7;
        $result->point_8 = $result_data->point_8;
        $result->point_9 = $result_data->point_9;
        $result->point_10 = $result_data->point_10;
        $result->total_point = $result_data->total_point;
        $result->save();
        
        // dd($);
        return redirect('https://preview.studio.site/live/65qm57dGqV/1');
    }
}