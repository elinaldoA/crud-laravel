<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function create()
    {
        return view('produtos.create');
    }
    //Função para cadastrar os dados no banco de dados
    public function store(Request $request)
    {
        Produto::create([
            'nome'=>$request->nome,
            'custo'=>$request->custo,
            'preco'=>$request->preco,
            'quantidade'=>$request->quantidade,
        ]);
        return "Produto Criado com Sucesso!";
        //dd($request->all());
    }
    //Função para exibir o dados em tela
    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.show', ['produto' => $produto]);
    }
    //Função para editar dados
    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.edit', ['produto' => $produto]);
    }
    //Função de atualização de dados
    public function update(Request $request, $id)
    {
        $produto = Produto::findOrFail($id);

        $produto->update([
            'nome'=>$request->nome,
            'custo'=>$request->custo,
            'preco'=>$request->preco,
            'quantidade'=>$request->quantidade,
        ]);
        return "Produto Atualizado com sucesso!";
    }
    //Função de recebimento de dados para exclusão
    public function delete($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.delete', ['produto' => $produto]);
    }
    //Função de exclusão dos dados
    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();

        return "Produto excluído com sucesso!";
    }
}
