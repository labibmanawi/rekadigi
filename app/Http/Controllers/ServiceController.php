<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function create_service(Request $request) {
        $serv  = new Service;

        $serv->serviceName = $request->input('serviceName');
        $serv->save();

        return back()->with('message','data berhasil disimpan');
    }
}
