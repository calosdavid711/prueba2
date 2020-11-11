<html>
<body>
@forelse($people as $person)
            
   <p>{{$person->nombre}}</p>
            @empty
            <p>No existen personas</p>
             @endforelse
	
	<form action="{{route('addPeople')}}" method="POST">
        @csrf
        <label for="">Nombre</label>
        <input type="text" name="nombre">
        <button id="btn-add">Agregar</button>
    </form>



</body>
</html>
