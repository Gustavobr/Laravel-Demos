<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = DB::SELECT('select * from produtos');
         var_dump($dados);
        return view('welcome');
    }

    public function new_product(){
        return view('novo');
    }

    public function logar(){
        return view ('home');
    }


}
