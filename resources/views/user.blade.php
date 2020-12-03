<!DOCTYPE html>
<html>
<head>
	<title>Usuário</title>
</head>
<body>
	
	<h3>Animes : Notas</h3>

	@foreach ($animes as $anime)
		<p> Anime: {{$anime}} </p>
	@endforeach

	@foreach ($notas as $nota)
		<p> Notas: {{$nota}} </p>
	@endforeach


</body>
</html>