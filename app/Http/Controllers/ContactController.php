<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactinsert(Request $req)
    {
        
            $insert = new contact();
            $insert->name = $req->name;
            $insert->email = $req->email;
            $insert->subject = $req->subject;
            $insert->message = $req->message;
            
           
            $insert->save();
            return redirect('contact')->with('msg3','Feedback submit successfully');
         
        }  


}
