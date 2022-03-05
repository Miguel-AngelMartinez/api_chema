@foreach ($unidades as $unidades )
    <h1>{{$unidades['nombre']}}</h1>
    <p>{{$unidades['descripcion']}}</p>
    <img src="{{$unidades['img']}}">
    <hr>
@endforeach