<?php

namespace App\Http\controllers;

use App\Http\Controllers\Controller;
use illuminate\Http\Request;

class ProdutosController extends Controller {

    public function mostrarProdutos() {
        $produtos = [
            (object) ['nome' => 'Produto 1', 'preco' => 100, 'desconto' => false],
            (object) ['nome' => 'Produto 2', 'preco' => 200, 'desconto' => true],
            (object) ['nome' => 'Produto 3', 'preco' => 150, 'desconto' => false],
        ];
    
        return view('produtos', compact('produtos'));
    }

}