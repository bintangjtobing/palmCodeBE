<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class csrfController extends Controller
{
    public function index(Request $request){
        $csrf = csrf_token();
        return response()->json([
            'status'=>201,
            'data'=>$csrf,
            'message'=>'CSRF Token has been generated'
        ]);
    }
}