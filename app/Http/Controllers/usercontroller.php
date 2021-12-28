<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;

class usercontroller extends Controller
{
    //
    public function create(){
        return view('create');
    }

    public function index(){
        $data=admin::get();
        return view ('index',['data'=>$data]);
    }

    public function store(Request $requ){
       $data = $this->validate($requ,[
            "name"     => "required",
            "email" => "required|email",
            "password" => "required",
            "cv" =>"required|mimes:pdf|max:10000"

            
        ]);
        $data['password'] =  bcrypt($data['password']);
        $op=admin::create($data);
        if($op)
        {
            $message ='student inserted';

        }else{
            $message ='student not inserted';
        }session()->flash('Message',$message);
        return redirect(url('/student'));

}

public function delete($id){
    // code ....
   $op  =  admin::where('id',$id)->delete();    

   if($op){
       $message = "Raw Removed";
   }else{
       $message = "Error Try Again";
   }
   return redirect(url('/student'));
  }





   public function edit($id)
       {
          //$data=admin::where('id',$id)->get();
          //dd($data);
         $data=admin::find($id);
           return view ('edit',['data'=>$data]);
       }



       public function update(Request $req)
       {
        $data = $this->validate($req,[
            "name"     => "required",
            "email" => "required|email",
            
            //"cv" =>"required|mimes:pdf|max:10000",
            "id" => "required|numeric"


            
        ]);
       $op= admin::where('id',$req->id)->update($data);
      
       if($op)
       {
        $message ='student data updated';

       }else{
        $message ='student data updated';
        session()->flash('Message',$message);
       }return redirect(url('/student'));

}

public function login(){
    return view('login');
}



public function DoLogin(Request $requ){

    $data = $this->validate($requ,[
        "email" => "required|email",
        "password" => "required"
    ]);


  if(auth()->attempt($data)){
      return redirect(url('/student'));
  }else{
      return redirect('/login');
  }

}



public function logout(){
    auth()->logout();
    return redirect(url('/login'));
}

}


