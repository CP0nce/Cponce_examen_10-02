@extends('layouts.plantilla')

@section('title', 'publicacion create')

@section('content')
    

<h1>Crear una publicación</h1>
<form method="post" action="{{ route('publicaciones.create') }}">
    @csrf
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <li> {{ $error }}</li>
        @endforeach
    @endif
    <label>@lang('Titulo')<br> <input class="form-control" type="text" name="titulo"
        value="{{ old('titulo'), $post->titulo}}" required></label>
@error('titulo')
<br>
<small class="text-danger">*{{$message}}</small>
<br>
@enderror

<label>@lang('Extracto')<br> <input class="form-control" type="text" name="extracto"
    value="{{ old('extracto'), $post->extracto}}" required></label>
@error('extracto')
<br>
<small class="text-danger">*{{$message}}</small>
<br>
@enderror


<label>@lang('Contenido')<br> <input class="form-control" type="text" name="contenido"
    value="{{ old('contenido'), $post->contenido}}" required></label>
@error('contenido')
<br>
<small class="text-danger">*{{$message}}</small>
<br>
@enderror


    <label>
        <br>
           <input type="checkbox" name="caducable" value="caducable"/>  <label>Caducable</label> <br>
           <input type="checkbox" name="comentable" value="comentable"/> <label>Comentable</label><br>
    </label>
    <label>
        Acceso:
    </label>
    <select name="acceso">
        <option value="Privado">Privado</option>
        <option value="Publico">Publico</option>
    </select><br>
    <button>Crear</button>
</form>

@endsection