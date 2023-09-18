<?php

namespace App\Http\Controllers\onprogress;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class role_admin extends Controller
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
    public function setting_home()
    {
        return view('content.onprogress.setting_home_aboutus_news');
    }
    public function setting_aboutus()
    {
        return view('content.onprogress.setting_home_aboutus_news');
    }
    public function setting_news()
    {
        return view('content.onprogress.setting_home_aboutus_news');
    }
}
