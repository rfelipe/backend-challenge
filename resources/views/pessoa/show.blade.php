@extends('layout.app')
@section('title', 'listagem de todas pessoas')
@section('content')
	<h1>{{$pessoas->nome}}</h1>
		<ul>
			<li>Email:{{$pessoas->email}}</li>
			<li>DDD:{{$pessoas->ddd}}</li>
			<li>Telefone:{{$pessoas->telefone}}</a></li>
		</ul>
		{{Form::open (['route' =>['pessoas.destroy',$pessoas->id],'method'=>'DELETE','name'=>'form'])}}
		{{Form::submit('Excluir',['class'=>'btn-default','onclick'=>'pergunta()'])}}

		<a href="javascript:history.go(-1)">Voltar</a>
@endsection