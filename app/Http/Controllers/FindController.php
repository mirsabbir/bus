<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FindController extends Controller
{
    public function index(Request $request){
        $up = date('Y-m-d',strtotime($request->up));
        $buses = \App\Bus::where('from',$request->from)->where('to',$request->to)->where('go_at',$up)->get();
        return view('find')->with(['buses'=>$buses]);
    }
}
