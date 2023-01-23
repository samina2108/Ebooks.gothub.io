<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\file;

use App\Models\addproduct;
class Homecontroller extends Controller
{
    public function Homefunc()
    {
        return view("index1");
    }

   
    public function Admindashboard()
  {

    $result=Admin::get();
      return view('Admin.Admindashboard',compact('result'));
  }

  public function contactview()
  {
      return view('contact');
  }

  public function comicview()
  {
      return view('Generals');
  }

  public function checkoutview()
  {
      return view('checkout');
  }


 
 
}
