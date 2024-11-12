<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal(){
         $fornecedores = [
         'Fornecedor 1',
         'Fornecedor 2',
         'Fornecedor 3',

        ];

     return view('index', compact('fornecedores'));

    
}
}
