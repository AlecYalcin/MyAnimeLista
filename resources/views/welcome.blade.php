<!DOCTYPE html>
<html>
<head>
    <title>MyAnimeLista</title>
</head>
<body>
    <div>
        <h1> MyAnimeLista </h1>
        <h3> Usuarios </h3>
        @foreach ($usuarios as $user) 
        	<p>
        		<a href="{{route('users', ['nome'=>$user])}}">
        			{{$user}}
        		</a>
        	</p>
        @endforeach
    </div>
</body>
</html>