@extends('layout.app')
@section('title', 'cadstro de pessoa')
@section('content')
	<h1>Cadastrar Pessoa</h1>
	@if(count($errors) > 0)
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}} </li>
				@endforeach
			</ul>
		</div>
	@endif
	{{Form::open	(['action' => 'PessoasController@store'])}}
	{{Form::label 	('nome','Nome')}}
	{{Form::text 	('nome','',['class' => 'form-control','required','placeholder' =>'Nome'])}}
	{{Form::label 	('email','Email')}}
	{{Form::email 	('email','',['class' => 'form-control','required','placeholder' =>'Email'])}}
	{{Form::label 	('ddd','DDD')}}
	{{Form::number 	('ddd','',['class' => 'form-control','','placeholder' =>'ddd'])}}
	{{Form::label 	('telefone','Telefone')}}
	{{Form::number 	('telefone','',['class' => 'form-control','','placeholder' =>'Telefone'])}}
	{{Form::submit('Salvar!',['class' => 'btn btn-default'])}}
	{{Form::close()}}

		<a href="javascript:history.go(-1)">Voltar</a>
@endsection