<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Service;
use App\Http\Controllers\DashboardController;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    

    public function create_message() {
         $service = Service::get();
         return view('home',compact('service'));
    }

    public function send_message(Request $request) {
         
        $validated = $request->validate([
                'nama' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'service_id' => 'required',
                'message' => 'required'
    
        ]);

        $msg = new Message;
        $msg->nama = $request->input('nama');
        $msg->email = $request->input('email');
        $msg->phone = $request->input('phone');
        $msg->service_id = $request->input('service_id');
        $msg->message = $request->input('message');

        $msg->save();
        return back()->with('message','pesan telah terkirim');
    }
}
