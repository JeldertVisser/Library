<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout(): RedirectResponse{
        Log::channel('library')->info(Auth::user()->name.' is uitgelogd.');
        session()->flush();
        return redirect('/login');
    }


    

    
}
