<html>
	<head>
		<title>controle Pessoas - @yield('title')</title>
	      <link href={{URL::asset("https://fonts.googleapis.com/icon?family=Material+Icons")}} rel="stylesheet"/>
	      <link type="text/css" rel="stylesheet" href={{URL::asset("css/materialize.css")}}  media="screen,projection"/>
	      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	    <script language="JavaScript"> 
			function pergunta(e) {
				if( !confirm('Deseja realmente excluir este registro?') )
				{
					if( window.event)
						window.event.returnValue=false;
					else
						e.preventDefault();
				}
			}
		</script> 
	</head>
	<body>
		<nav>
		    <div class="nav-wrapper teal lighten-2">
		      <a href="http://localhost:8000/" class="brand-logo"><i class="material-icons">people</i>Contatos</a>
		      <ul class="right hide-on-med-and-down">
		        <li><a href="{{route('listar')}}"><i class="material-icons">perm_contact_calendar</i></a></li>
		        <li><a href="{{route('pessoas.index')}}"><i class="material-icons">search</i></a></li>
		        <li><a href="{{route('pessoas.create')}}"><i class="material-icons">person_add</i></a></li>
		      </ul>
		    </div>
		  </nav>
		<div class="container">
			@yield('content')
		</div>
	</body>
</html>