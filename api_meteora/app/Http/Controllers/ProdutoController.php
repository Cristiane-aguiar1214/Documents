<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function create(){
        return view('produtos.create');
    }
    public function store(Request $request){
       $request->validate([
        'nome'=> 'required|string|<max:200',
        'descricao'=> 'nullable|text',
        'tamanho'=> 'nullable|string|max:10',
        'cor'=>'nullable|string|max:50',
        'preco'=>'required|decimal|min:0',
        'quantidade'=>'required|integer|min:0',
        'imagem'=>'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'


        ]);

        $imagem = $request->file('imagens');

        $caminhoImagem = $imagem ? $imagem-> store ('imagens/produtos','public'):null;
       Produto::create([
        'nome'=> $request -> nome,
        'descricao'=>$request -> descricao,
        'tamanho'=> $request-> tamanho,
        'cor'=> $request-> cor,
        'preco'=>$request-> preco,
        'quantidade'=>$request-> quantidade,
        'imagem'=>$request-> imagem


       ]);
       return redirect()->route('produtos,create')->with('sucess','Produto cadastrado com sucesso!');

       

    }
}
