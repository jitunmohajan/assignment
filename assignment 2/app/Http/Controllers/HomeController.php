<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\User;
use DB;
use App\Quotation;
use App\Category;


class HomeController extends Controller
{
    public function index(){
        return view('pages.index');        
    }
    public function home(){
        return view('pages.home');        
    }
    public function login(){
        if(Session::has('userid')){
            return view('pages.home');
        }
        return view('pages.login');
    }
    public function register(){
        return view('pages.register');
    }
    public function postLogin(Request $request){
        //return 'welcome';
       
        $email = $request->email;
        $password=$request->password;
        //return 'welcome';
        $obj = User::where('email','=', $email)
                        ->where('password','=',$password)
                        ->first();
        if($obj){
            //echo 'Successfully Logged in';
            Session::put('userid',$obj->id);
            return redirect('/home');
            //return 'welcome';
        }
        else{
            return redirect()->back();
            //return redirect()->back()->with('checkbox',"your input is wrong");
            
        }
    }
    public function store(Request $request){
    	$obj = new User();  //app/User.php file e extends korate hobe
    	$obj->name = $request->name;
    	$obj->email = $request->email;
    	$obj->password = $request->password;
    	if($obj->save()){
    	    return redirect('/login');
    		//echo 'Successfully Inserted';
    	}
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        //return redirect()->route('login');
        return redirect('/login');
    }
 
}
