<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function calculadora(){
        return view('calculadora');
    }

    public function soma(Request $request){
        //dd($request->num1);
        //dd($request->all()); //debugga os inputs
        $num1 = $request->num1;//pega as variáveis do formulário
        $num2 = $request->num2;
        
        //calcula a soma
        $result = $num1+$num2;

        //mostra a página para o usuário
        return view('resultado', compact('result'));
    }
}
