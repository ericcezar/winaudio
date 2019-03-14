<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LogoutController extends Controller
{
    //Função para realizar o logout do sistema e redirecionar para a tela de login
    public function Logout(){

        auth()->logout();

        session()->flash('message', 'Seu usuário foi deslogado');

        return redirect('/login');
    }
}
