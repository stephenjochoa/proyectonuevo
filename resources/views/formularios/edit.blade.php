<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edicion de formularios') }}
        </h2>
    </x-slot>
    <div class="container-fluid p-0 mb-5" >
        <div class="py-12">
            <div class="container">

<form action="/formularios/{{$formulario->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="nombreformulario">Modifique el nombre del formulario</label>
        <input name="nombre_formulario" id="nombreformulario" value="{{$formulario->nombre_formulario}}" type="text" class="form-control" id="nombreformulario">

    </div>
    <div class="mb-3">
        <label for="descripcionformulario">Modifique la descripcion del formulario</label>
        <input name="descripcion_formulario" id="nombreformulario" value="{{$formulario->descripcion_formulario}}" type="text" class="form-control" id="nombreformulario">

    </div>
    <div class="mb-3">
        <label for="imagen">Cargue nueva imagen</label>
        <br>
        <input name="imagen" id="imagen" type="file">

    </div>
    <br>
        <button type="submit" class="btn btn-primary">Actualizar</button>



</form>


</x-app-layout>
