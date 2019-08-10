@extends('layout.app')
@section('title', 'listagem de pessoas')
@section('content')
		<h1>Buscar Pessoa</h1>
				{{Form::open(['url'=>['pessoas/buscar']])}}
				<div class ="row">
					<div class="col-lg-12">
						<div class="input-group">
							{{Form::text('busca',$busca,['class'=>'form-control','requerid','placeholder'=>'Buscar'])}}
							<span class="input-group-btn">
								{{Form::submit('Buscar',['class'=>'btn btn-default'])}}
							</span>
						</div>
					</div>
				</div>
			{{Form::close()}}

	
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