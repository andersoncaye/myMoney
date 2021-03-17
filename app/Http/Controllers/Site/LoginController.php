<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function  __invoke()
    {
        return view('site.login');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {
        $this->validate($request,[
           'email' => 'required',
           'password' => 'required'
        ],[
            'email.required' => 'E-mail é obrigatório',
            'password.required' => 'Senha é obrigatória'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('category');
        } else {
            return redirect()->back()->with('danger', 'E-mail ou senha inválidos!');
        }
    }
}
