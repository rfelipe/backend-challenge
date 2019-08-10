@extends('layout.app')
@section('title', 'listagem de todas pessoas')
@section('content')
		<h1>Lista Todas as Pessoas</h1>
		<ul>
			@foreach($pessoas as $pessoa)
			<div class="card-panel blue lighten-4">
				<li>Nome: <a href="http://localhost:8000/pessoas/{{$pessoa->id}}">{{$pessoa->nome}}</li></a>
				<li>Email:{{$pessoa->email}}</li>
			</div>
			@endforeach
		</ul>

		<a href="javascript:history.go(-1)">Voltar</a>
@endsection