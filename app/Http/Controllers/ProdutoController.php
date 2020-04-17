<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Produto;
use DB;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $dados = Produto::query()->orderBy('nome')->get();
        $mensagem = $request->session()->get('mensagem');
        json_decode($dados);
        return view ('home', compact('dados'));
            
        /*
            return view home, compact('dados');
            $produto = Produto::query()->orderBy('nome')->get();

            <?php @foreach($produtos as $produto) ?>
                    {{ $produto->nome }}

        */
             
       //]);

        //return view('home', [
          //  'produtos'=> $produtos
        //]);
    }


    public function novo(){
        return view ('novo');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //$numero = 10;
        //echo var_dump($numero);
        $dados = $request->all();

        if(!empty($dados)){
            Produto::create($dados);
            $request->session()->flash
            ('mensagem',
                         "Produto , {$request->nome} criado com sucesso");
            //echo 'Produto criado com sucesso'. $request->nome;
            return redirect('home');
        }
        //
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //if($this->$request->get($id))
        if(!empty($id)){
            Produto::destroy($id);
            return redirect ('home');
        }
    }
}
