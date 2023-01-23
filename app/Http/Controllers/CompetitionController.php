<?php

namespace App\Http\Controllers;

use App\Models\competition;
use Illuminate\Http\Request;


class CompetitionController extends Controller
{
    public function Competition()
    {
        return view("Competition");
    }


    public function competitionInsert(Request $req)
    {
        
     $insert = new competition();
            $insert->name = $req->name;
            $insert->category = $req->category;
            
            $insert->text = $req->text;
            
           
            $insert->save();
        
            return redirect('/apply')->with('msg3','Story submit successfully');
            
         
        } 
        // FECtch cometition story
        public function fetch_story()
{
    $p = competition::all();

   return view ("Admin.fetchstory",compact("p")); 
}

public function story_delete($id){

    $auth =competition::find($id);
    $auth->delete();
    return redirect('Storyfetch');
}


// for upadte function
public function edit2($id)
{
    $p =competition::find($id);

   return view("Admin.storyedit",compact("p")); 
}

public function story_update(Request $request, $id)
{
    $student = competition::find($id);
    $student->name = $request->input('name');
    $student->category = $request->input('category');
    $student->text = $request->input('text');
    $student->winner = $request->input('Winner');
    $student->update();
    return redirect('Storyfetch')->with('msg7','Student Updated Successfully');
}
}
         

