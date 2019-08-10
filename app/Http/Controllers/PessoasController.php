<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pessoa;

class PessoasController extends Controller{
    public function index(){
    	$pessoas = Pessoa::all();
    	return view('pessoa.index',array('pessoas'=>$pessoas,'busca'=>null));
    }

   	public function show($id){
   		$pessoas = Pessoa::find($id);
   		return view('pessoa.show',array('pessoas'=>$pessoas));
   	}

	public function listar(){
    	$pessoas = Pessoa::all();
    	return view('pessoa.listar',array('pessoas'=>$pessoas));
    }

   	public function create(){
   		return view('pessoa.cadastro');
   	}

   	public function store(Request $request){
   		$this->validate($request,
   			[	'nome' 		=> 'required|min:2',
   				'email'		=> 'required|email|unique:pessoas',
   				'ddd'		=> 'max:2',
   				'telefone'	=> 'max:9',
   			]);

   		$pessoas = new Pessoa();
   		$pessoas -> nome 	= $request -> input('nome');
   		$pessoas -> email 	= $request -> input('email');
   		$pessoas -> ddd 	= $request -> input('ddd');
   		$pessoas -> telefone = $request -> input('telefone');

   		if($pessoas->save()){
   			return redirect('pessoas');
   		}
   	}

   	public function destroy($id){
   		$pessoas = Pessoa::find($id);
   		$pessoas -> delete();
   		//return redirect()->back();
   		return redirect('pessoas');
   	}


   	public function buscar(Request $request){
   		$pessoas = Pessoa::where('nome', 'LIKE',
   			'%' .$request->input('busca').'%')->orwhere('email', 'LIKE',
   			 $request->input('busca'))->get();

		return view('pessoa.index',array('pessoas' => $pessoas,'busca'=>$request->input('busca')));
   	}
}