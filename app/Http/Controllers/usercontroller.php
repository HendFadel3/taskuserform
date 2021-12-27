<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    //
    public function create(){
        return view('create');
    }
    public function validation(Request $req){
        $er=[];
        if(empty($req->title)){
            $er['title']='req';
        }
        if(empty($req->content)){
            $er['cont']='req';
        }
        if (count($er)==0){
            echo $req->title;
        }else{
       
            print_r($er);

        }

    }
}


