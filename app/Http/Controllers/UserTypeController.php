<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UserTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function manage()
    {
        $viewName = '/login';
        if(Auth::user()->type === 'patient'){
            // here goes the patient dashbaord route
            $viewName = '/patient';
        }
        
        else if(Auth::user()->type === 'admin'){
            $viewName = '/admin';
        }

        return redirect($viewName);
    }
}
