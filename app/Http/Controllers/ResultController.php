<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;
use App\Models\Question;
use App\Models\User;
use Illuminate\Support\Facades\DB;


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
        $phase_1 = $point_1 + $point_5 + $point_6 + $point_7 + $point_10;
        $phase_2 = $point_1 + $point_2 + $point_3 + $point_5 + $point_6 + $point_7 + $point_9;
        $phase_3 = $point_1 + $point_2 + $point_3 + $point_5;
        $phase_4 = $point_3 + $point_4 + $point_5 + $point_6 + $point_7 + $point_8 + $point_9;
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
        
// =============== 設問１ =================
        $previous_q1_point_1 = DB::table('results')
        ->where('point_1','=','10')
        ->count();
        $previous_q1_point_2 = DB::table('results')
        ->where('point_1','=','5')
        ->count();
        $previous_q1_point_3 = DB::table('results')
        ->where('point_1','=','0')
        ->count();

// =============== 設問2 =================
        $previous_q2_point_1 = DB::table('results')
        ->where('point_2','=','10')
        ->count();
        $previous_q2_point_2 = DB::table('results')
        ->where('point_2','=','5')
        ->count();
        $previous_q2_point_3 = DB::table('results')
        ->where('point_2','=','0')
        ->count();

// =============== 設問3 =================
        $previous_q3_point_1 = DB::table('results')
        ->where('point_3','=','10')
        ->count();
        $previous_q3_point_2 = DB::table('results')
        ->where('point_3','=','5')
        ->count();
        $previous_q3_point_3 = DB::table('results')
        ->where('point_3','=','0')
        ->count();

// =============== 設問4 =================
        $previous_q4_point_1 = DB::table('results')
        ->where('point_4','=','10')
        ->count();
        $previous_q4_point_2 = DB::table('results')
        ->where('point_4','=','5')
        ->count();
        $previous_q4_point_3 = DB::table('results')
        ->where('point_4','=','0')
        ->count();

// =============== 設問5 =================
        $previous_q5_point_1 = DB::table('results')
        ->where('point_5','=','10')
        ->count();
        $previous_q5_point_2 = DB::table('results')
        ->where('point_5','=','5')
        ->count();
        $previous_q5_point_3 = DB::table('results')
        ->where('point_5','=','0')
        ->count();

// =============== 設問6 =================
        $previous_q6_point_1 = DB::table('results')
        ->where('point_6','=','10')
        ->count();
        $previous_q6_point_2 = DB::table('results')
        ->where('point_6','=','5')
        ->count();
        $previous_q6_point_3 = DB::table('results')
        ->where('point_6','=','0')
        ->count();

// =============== 設問7 =================
        $previous_q7_point_1 = DB::table('results')
        ->where('point_7','=','10')
        ->count();
        $previous_q7_point_2 = DB::table('results')
        ->where('point_7','=','5')
        ->count();
        $previous_q7_point_3 = DB::table('results')
        ->where('point_7','=','0')
        ->count();

// =============== 設問8 =================
        $previous_q8_point_1 = DB::table('results')
        ->where('point_8','=','10')
        ->count();
        $previous_q8_point_2 = DB::table('results')
        ->where('point_8','=','5')
        ->count();
        $previous_q8_point_3 = DB::table('results')
        ->where('point_8','=','0')
        ->count();

// =============== 設問9 =================
        $previous_q9_point_1 = DB::table('results')
        ->where('point_9','=','10')
        ->count();
        $previous_q9_point_2 = DB::table('results')
        ->where('point_9','=','5')
        ->count();
        $previous_q9_point_3 = DB::table('results')
        ->where('point_9','=','0')
        ->count();

// =============== 設問１0 =================
        $previous_q10_point_1 = DB::table('results')
        ->where('point_10','=','10')
        ->count();
        $previous_q10_point_2 = DB::table('results')
        ->where('point_10','=','5')
        ->count();
        $previous_q10_point_3 = DB::table('results')
        ->where('point_10','=','0')
        ->count();

// ================ 平均点 ================
        $average = Result::avg("total_point");
        $previous_data = [
            'previous_q1_point_1' => $previous_q1_point_1,
            'previous_q1_point_2' => $previous_q1_point_2,
            'previous_q1_point_3' => $previous_q1_point_3,

            'previous_q2_point_1' => $previous_q2_point_1,
            'previous_q2_point_2' => $previous_q2_point_2,
            'previous_q2_point_3' => $previous_q2_point_3,

            'previous_q3_point_1' => $previous_q3_point_1,
            'previous_q3_point_2' => $previous_q3_point_2,
            'previous_q3_point_3' => $previous_q3_point_3,

            'previous_q4_point_1' => $previous_q4_point_1,
            'previous_q4_point_2' => $previous_q4_point_2,
            'previous_q4_point_3' => $previous_q4_point_3,

            'previous_q5_point_1' => $previous_q5_point_1,
            'previous_q5_point_2' => $previous_q5_point_2,
            'previous_q5_point_3' => $previous_q5_point_3,

            'previous_q6_point_1' => $previous_q6_point_1,
            'previous_q6_point_2' => $previous_q6_point_2,
            'previous_q6_point_3' => $previous_q6_point_3,

            'previous_q7_point_1' => $previous_q7_point_1,
            'previous_q7_point_2' => $previous_q7_point_2,
            'previous_q7_point_3' => $previous_q7_point_3,

            'previous_q8_point_1' => $previous_q8_point_1,
            'previous_q8_point_2' => $previous_q8_point_2,
            'previous_q8_point_3' => $previous_q8_point_3,

            'previous_q9_point_1' => $previous_q9_point_1,
            'previous_q9_point_2' => $previous_q9_point_2,
            'previous_q9_point_3' => $previous_q9_point_3,

            'previous_q10_point_1' => $previous_q10_point_1,
            'previous_q10_point_2' => $previous_q10_point_2,
            'previous_q10_point_3' => $previous_q10_point_3,

            'average' => $average
        ];


        return view('diagnostic/result',$result_data,$previous_data);
    }

    public function form(Request $request) {
        // フォーム入力されたユーザーデータをDBへ保存する処理
        $user = new User();
        $user->company_name = $request->company_name;
        $user->name = $request->name;
        $user->department_name = $request->department_name;
        $user->job_title = $request->job_title;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->company_url = $request->company_name;
        $user->save();

        // hiddenで保持していた回答結果をDBへ渡す処理
        $result = new Result();
        $result->point_1 = $request->point_1;
        $result->point_2 = $request->point_2;
        $result->point_3 = $request->point_3;
        $result->point_4 = $request->point_4;
        $result->point_5 = $request->point_5;
        $result->point_6 = $request->point_6;
        $result->point_7 = $request->point_7;
        $result->point_8 = $request->point_8;
        $result->point_9 = $request->point_9;
        $result->point_10 = $request->point_10;
        $result->total_point = $request->total_point;
        // dd($result);
        $result->save();
        
        return redirect('https://preview.studio.site/live/65qm57dGqV/1');
    }
}