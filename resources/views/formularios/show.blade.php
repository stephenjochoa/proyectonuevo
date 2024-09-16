<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edicion de formularios') }}
        </h2>
    </x-slot>
    <div class="container-fluid p-0 mb-5" >
        <div class="py-12">
            <div class="container">

<div class="text-center">

    <img style="height: 400px; width:300px;margin:20px" src="{{ Storage:: url($formulario->imagen)}}" class="card-img-top mx-auto d-block" alt="">
    <div class="card-body"  >
        <p class="card-title">{{$formulario->descripcion_formulario}}</p>
        <br>
    </div>
    <a href="/formularios/{{$formulario->id}}/edit" class="btn btn-dark"> Editar formulario</a>
</div>


</x-app-layout>
