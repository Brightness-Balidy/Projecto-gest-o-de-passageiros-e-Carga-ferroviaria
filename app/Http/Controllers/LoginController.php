<?php

namespace App\Http\Controllers;
use illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function auth(Request $request){

        $credenciais = $request -> validate([
            'email' => ['required', 'email'],
            'password' =>['required'],
        ],[
            'email.required' =>'O campo email é obrigatório!',
            'email.email'=> 'email inválido!',
            'password.required'=> 'O campo senha é obrigatório!',
        ]);

        if(Auth::attempt($credenciais,$request->remember)){
            $request -> session()->regenerate();
            return redirect()->intended('/admin/dashboard');
        }else{
            return redirect()->back()->with('erro', 'Email ou senha inválida.');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login.login'));
    }

    public function create(){
        return view('login.criarConta');
    }
}
