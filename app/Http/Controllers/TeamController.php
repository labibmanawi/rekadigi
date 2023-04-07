<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{   
    public function list_team() {
        return view('admin.team');
    }
 
    public function create_team(Request $request) {
        
        return $request->file('picture')->store('image');
        if ($request->file('imgUpload1') == null) {
            $file = "";
        }else{
        $file = $request->file('imgUpload1')->store('images');  
}
         $validated = $request->validate([
                'nama' => 'required',
                'position' => 'required',
                'picture' => 'required'
        ]);

        $msg = new Team;
        $msg->nama = $request->input('nama');
        $msg->position = $request->input('position');
        $msg->picture = $request->input('picture');
        
        $msg->save();
        return back()->with('message','pesan telah terkirim');
        
    }
}
