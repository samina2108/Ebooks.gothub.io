<?php
namespace App\Http\Controllers;
// use Auth;

use App\Models\Admin;
use App\Models\Addbook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\file;
use App\Models\addproduct;
class AdminController extends Controller
{
    public function adminregisterfunc()
    {
        return view('Admin.Adminregister');
    }
// Admin ADD PRODUCT function
public function Addproduct()
    {
        return view('Admin.Addproduct');
    }

    public function Addbook(Request $req)
{
    
        $insert = new Addbook();
        $insert->name = $req->name;
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
        return redirect('productadd')->with('msg4','Book publish successfully');
     
    }

    // viewproduct
    
// fetch product

public function fetchuserdata()
{
    $p = addproduct::all();

   return view ("Admin.viewproduct",compact("p")); 
}

public function categoryfetch()
{
    $p = addproduct::all();

   return view("category",compact("p")); 
}

// / Admin delet function
public function Admindelete($id){

    $auth =addproduct::find($id);
    $auth->delete();
    return redirect('viewproduct');
}

// Adminfetchdata user
public function adminfetch()
{
    $p = Addbook::all();

   return view ("Admin.Adminfetch",compact("p")); 
}

//  Admin delet function 
public function Admindeletefetch($id){

    $auth =Addbook::find($id);
    $auth->delete();
    return redirect('adminfetch');
}
//  Admin delet user function 
public function Adminuserdeletefetch($id){

    $auth =addproduct::find($id);
    $auth->delete();
    return redirect('viewproduct');
}
// for upadte function
public function edit($id)
{
    $p = addproduct::find($id);

   return view("Admin.edit",compact("p")); 
}



public function update(Request $request, $id)
{
    $student = Addproduct::find($id);
    $student->name = $request->input('name');
    $student->Winner = null;
    $student->email = $request->input('email');
    $student->category = $request->input('category');
    $student->prize = $request->input('prize');
   $student->Winner = $request->input('Winner');
    if($request->hasfile('image'))
    { 
          $destination = 'uploads/addproducts/'.$student->image;
          if(file::exists($destination))
          {
            file::delete($destination);
          }
        $file = $request->file('image');
        $extenstion = $file->getClientOriginalExtension();
        $filename = time().'.'.$extenstion;
        $file->move('uploads/addproducts/', $filename);
        $student->image = $filename;
    }
    $student->update();
    return redirect("viewproduct")->with('addmsg','Data add successfully');
}
// Logout function===========


public function logout1(){
    \Session::flush();
    \Auth::logout();
    return redirect('Adminlogin');
}


}


