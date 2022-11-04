<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\support\Facades\Auth;
use App\Models\user;

class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if (Auth::user()->usertype=='0')
            {
                return view('dashboard');
            }
            else
            {
                return view('admin.home');
            }
        }
        else
        {
            return redirect()->back();
        }
    }
    
}
