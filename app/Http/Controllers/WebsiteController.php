<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Plan;
use App\Models\Utility;
use App\Models\Warning;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class WebsiteController extends Controller
{
    public function price()
    {
        $plans = Plan::all();
      return view('website.pages.price',compact('plans')) ;
    }

    public function contact()
    {
        return view('website.pages.contact') ;
    }
    public function book()
    {
        return view('website.pages.book') ;
    }


}
