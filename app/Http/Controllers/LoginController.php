<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\StoreLoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function verify(StoreLoginRequest $request): RedirectResponse{
        $validated = $request->validated();

        if (Auth::attempt($validated)){
            return redirect('/home');
        }
        else{
            return redirect('/login');
        }
    }
    public function create(): View{
        return view('home', ['msg'=>'Welkom op de home page!']);
    }

    

    

    
}
