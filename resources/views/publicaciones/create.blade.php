<h1>Crear una publicación</h1>
<form method="post" action="{{ route('espadas.store') }}">
    @csrf
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <li> {{ $error }}</li>
        @endforeach
    @endif
    <label>
        Título de la publicación
        <input type="text" name="titulo" value="{{ old('titulo') }}"><br>
    </label>
    <label>
        Extracto publicación
        <input type="text" name="extractor" value="{{ old('extractor') }}"/><br>
    </label>
    <label>
        Contenido de la publicación
        <textarea name="contenido" value="{{ old('contenido') }}"></textarea><br>
    </label>
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
