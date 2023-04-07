<?php

namespace App\Http\Controllers;



use App\Models\Message;
use App\Models\Service;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard_start() {
        return view('admin.adminHome');
    }
    public function inbox_message() {
        $inbox_list = Message::with('services')->paginate(10);
         return view('admin.messageInbox', compact('inbox_list'));
    }
}
