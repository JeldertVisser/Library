<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\StoreLoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function verify(StoreLoginRequest $request): RedirectResponse{
        $validated = $request->validated();

        if (Auth::attempt($validated)){
            Log::channel('library')->info($request->name.' is ingelogd.');
            return redirect('/home');
        }
        else{
            Log::channel('library')->info('Login van '.$request->name.' is geweigerd.');
            return redirect('/login');
        }
    }
    public function create(): View{
        return view('home', ['msg'=>'Welkom op de home page!']);
    }
   

    
}
