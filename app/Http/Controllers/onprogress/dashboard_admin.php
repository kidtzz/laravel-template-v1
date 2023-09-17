<?php

namespace App\Http\Controllers\onprogress;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboard_admin extends Controller
{
    //
    public function index()
    {
        return view('content.onprogress.dashboard-admin');
    }
    public function input_rekening()
    {
        return view('content.onprogress.input-rekening');
    }
}
