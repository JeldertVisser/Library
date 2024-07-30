<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Log;

class UserController extends Controller{

    public function create(): View{
        return view('login', ['msg'=>'Welkom!']);
    }

    public function store(StoreUserRequest $request): RedirectResponse{
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        Log::channel('library')->info($user->name.' is geregistreerd.');
        return redirect('/login');
    }
    

}
