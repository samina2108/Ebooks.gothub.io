<?php

namespace App\Http\Controllers;

use App\Models\checkout;
use Illuminate\Http\Request;
use App\Models\addproduct;
use DB;
class CheckoutController extends Controller
{
    public function checkoutInsert(Request $req)
    {
        
     $insert = new checkout();
            $insert->first_name = $req->first_name;
            $insert->last_name = $req->last_name;
            $insert->Country = $req->Country;
            $insert->Address = $req->Address;
            $insert->City = $req->City;
            $insert->post_code= $req->post_code;
            $insert->Phone = $req->Phone;
            $insert->Email = $req->Email;
            $insert->order_place = $req->order_place;
            $insert->Payment= $req->Payment;
            $insert->save();
        
            return redirect('checkout')->with('msg6','Payment add successfully');
            
         
        }  






}



