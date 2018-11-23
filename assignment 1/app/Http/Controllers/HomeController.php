<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    public function addpost(){
        return view('backend.pages.addpost');
    }
   
    public function savepost(Request $req){
        $obj = new User();
    	$obj->title = $req->title;
    	$obj->description = $req->description;
    	if($obj->save()){
    		//return redirect('list');
    		//echo 'Successfully Inserted';
            //return 'save successfully';
            Session::put('message', 'Successfully Registered...!!');
            return view('backend.pages.addpost');
        }
    }

    public function allpost(){
        //return view('backend.pages.addpost');
            $obj = User::all();
            return view('backend.pages.allpost', ['data'=>$obj]);
         
    }
}
