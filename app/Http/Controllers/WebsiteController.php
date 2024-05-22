<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Utility;
use App\Models\Warning;
use App\Models\Employee;
use App\Models\Pipeline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class WebsiteController extends Controller
{
    public function price()
    {
        $plans = Plan::whereNotIn('id', [1, 2])->get();
      return view('website.pages.price',compact('plans')) ;
    }

    public function contact()
    {
        return view('website.pages.contact') ;
    }
    public function book()
    {
        $pipelines = Pipeline::where('created_by', '=', 2)->get();
    
        return view('website.pages.book',compact('pipelines')) ;
    }


}
