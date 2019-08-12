<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LabController extends Controller
{
    function index(){
        return "LabController index action!!";
    }

    function show($CID, $CData = ""){
        dd([$CID, $CData]);
    }

    function param(Request $request){
        // dd($request->all());
        // dd($request->query());
        // dd($request->query('data'));
        // dd($request->input());
        // dd($request->input('data'));
        dd($request->data, "ver 2.");
    }

    function getForm(){
        return view("lab.aForm");
    }

    function postForm(Request $request){
        dd($request->input());
    }

    function xml(){
         $content = "<book><title>ooo</title><price>500</price></book>";
         return response($content, 200, [
            'Content-Type' => 'Application/xml'
         ]);
    }

    function memberOnly(){
        // if (使用者尚未登入) {
            return redirect('lab/form');
        // }
        // go ahead
    }
}
