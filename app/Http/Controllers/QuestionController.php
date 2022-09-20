<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function question(Request $request){
        $company_name = $request->company_name;

        $diagnostic_data = [
            'company_name' => $company_name,
        ];

        session([
            'diagnostic_data' => $diagnostic_data,
        ]);
        
        return view('diagnostic/question', $diagnostic_data);
    }
}
