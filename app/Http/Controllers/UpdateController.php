<?php

namespace App\Http\Controllers;

use App\Models\update;
use Illuminate\Http\Request;
use App\Models\Addbook;
use App\Models\addproduct;
class UpdateController extends Controller
{

  public function search()
  {
  
  $search_text= $_GET['query'];
  $data=addproduct::query()
  ->where('name', 'LIKE' , '%' .$search_text. '%')
  ->orwhere('email', 'LIKE' , '%' .$search_text. '%')
  ->orwhere('category', 'LIKE' , '%' .$search_text. '%')
  ->orwhere('prize', 'LIKE' , '%' .$search_text. '%')
  ->orwhere('image', 'LIKE' , '%' .$search_text. '%')
  ->orwhere('created_at', 'LIKE' , '%' .$search_text. '%')
  ->orwhere('updated_at', 'LIKE' , '%' .$search_text. '%')
  ->get();
  
  return view('search',compact('data'));
  
  
  }

  }
