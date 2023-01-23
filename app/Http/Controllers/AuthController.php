<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\addproduct;
use App\Models\competition;

use DB;
class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
public function dashboardfunc()
{
    return view('auth.dashboard');
}
public function dash2()
{
    return view('auth.dashboarimage');
}
// Product addt
public function publishfunc()
{
    return view('auth.productadd');
}

public function insertbook(Request $req)
{
    
        $insert = new addproduct();
        $insert->name = $req->name;
        $insert->email = $req->email;
        $insert->category = $req->select;
        $insert->prize = $req->prize;
        if($req->hasfile('image'))
        {
            $file = $req->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/addproducts/', $filename);
            $insert->image = $filename;
        }
    
       
        $insert->save();
        return redirect('publishbook')->with('msg','Book publish successfully');
     
    }
                           
        // >back()->with('message','Student Image Upload Successfully');


// productfunt end

    public function login(Request $request){
        // validate data 
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        // login code 
        
        if(\Auth::attempt($request->only('email','password'))){
            return redirect('userdashboard');
        }

        return redirect('login')->withError('Login details are not valid');

    }

    public function register_view()
    {
        return view('auth.register');
    }

    public function register(Request $request){
        // validate 
        $request->validate([
            'name'=>'required',
            'email' => 'required|unique:users|email',
            'password'=>'required|confirmed'
        ]);

        // save in users table 
        
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=> \Hash::make($request->password)
        ]);

        // login user here 
        
        if(\Auth::attempt($request->only('email','password'))){
            return redirect('login');
        }

        return redirect('register')->withError('Error');


    }
 public function home(){
        return view('home');
    }
// fetch product

public function fetchproduct()
{
    $p = addproduct::all();

   return view ("auth.fetchproduct",compact("p")); 
}
// Category functions
public function fetchcomic()
{
    $p =DB::table('addproducts')->where('category', 'comics')->get();

   return view ("comics",compact("p")); 
}

public function fetchQuiz()
{
    $p = DB::table('addproducts')->where('category', 'quizbook')->get();

   return view ("quizbook",compact("p")); 
}

public function fetchNovel()
{
    $p = DB::table('addproducts')->where('category', 'Novels')->get();

   return view ("Novels",compact("p")); 

}
public function fetchGeneral()
{
    $p = DB::table('addproducts')->where('category','General')->get();
    return view('Generals', compact('p'));

}

public function homepage()
{
    return View('winner')
    ->with('competition', competition::all())
    ->with('addproduct', addproduct::all());
 
}


// userdashboard
public function userdashboard(){
    return view('auth.userdashboard');
}


// User delet function
public function userdelete($id){

    $auth =addproduct::find($id);
    $auth->delete();
    return redirect('fetch');
}

// Logout function===========


public function logout(){
    \Session::flush();
    \Auth::logout();
    return redirect('register');
}
}




