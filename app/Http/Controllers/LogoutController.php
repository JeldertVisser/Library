<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class LogoutController extends Controller
{
    public function logout(): RedirectResponse{
        session()->flush();
        return redirect('/login');
    }


    

    
}
