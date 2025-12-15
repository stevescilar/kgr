<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        // check if user is trying to access admin or user dashboard
        if(Auth::id())
        {
            $userType= Auth::user()->user_type;

            if($userType =='user')
            {
                return view('dashboard');
            }
            else if($userType == 'admin')
            {
                return view('admin.index');
            }
            else 
            {
                return redirect()->back();
            }
        }
    }

    public function home()
    {
        return view('home.index');
    }
}
