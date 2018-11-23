<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\User;
use DB;


class HomeController extends Controller
{
   
    public function addPost(){
    	return view('backend.pages.addpost');
    }
    public function allpost(){
        return view('frontend.pages.allpost');
       
    }
    public function savepost(Request $request){
    	$obj = new User();  //app/User.php file e extends korate hobe
    	$obj->title = $request->title;
    	$obj->description = $request->description;
    	if($obj->save()){
           return redirect('allpost');
           //return 'success';
    	}
    }
}

/*
 public function home(){
    	return view('frontend.pages.home');
    }

    public function about(){
    	return view('frontend.pages.about');
    }

    public function service(){
    	return view('frontend.pages.service');
    }

    public function test(){
    	return view('backend.pages.dashboard');
    }

*/
