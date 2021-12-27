<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class taskuserform extends Controller
{
    //
    public function taskuserform(){
        return view('taskuserform');
    }
    public function store(Request $requ){
        $this->validate($requ,[
            //"name"     => "required|regex:/^[a-zA-ZÑñ\s]+$/",
            "name"     => "required|alpha",
            "password" => "required|min:6",
            "email"    => "required|email",
            "address"  => "required|alpha|min:10|max:10",
            "linkedin" => "required|url",
            "gender"   => "required"
        ]);

        echo "dataInserted Sucessfully......";
    }

}
