<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use Illuminate\Http\Request;
use App\Models\Admin;
class logincontroller extends Controller
{
    public function registration(Request $res){
      $res->validate([
        'name' => 'required|string|min:3',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:3',
        'password_confirmation' => 'required|same:password'
      ]);
      
      $reg = new Admin();
      $reg->Adminname = $res->name;
      $reg->Adminemail = $res->email;
      // $reg->Adminpassword =\Hash::make($res->password);
      $reg->Adminpassword =$res->password;

      $reg->save();
      return redirect('Adminlogin')->with('msg','register successfully');
    }

    public function postLogin(Request $res){
      
        $res->validate([
            'email' => 'required|email',
            'password' => 'required|min:3',
          ]);
          $email = $res->email;
          $password = $res->password;
          // echo $password;
          $result = Admin::where(['Adminemail'=>$email,'Adminpassword'=>$password])->get();
         
          // echo $result;
          if(isset($result['0']->id))
          {
            $res->session()->put('Adminlogin',true);
            return redirect("dashboardadmin");

          } 
          else{

            return redirect('Adminlogin')->with('msg2','username and password does not matched');
          }
         }

public function logout(){
        Auth::logout();
        return redirect('login')->with('msg3','logout user successfully'); 
    }

    public function Adminlogin()
    {
        return view('Admin.Adminlogin');
    }
}
