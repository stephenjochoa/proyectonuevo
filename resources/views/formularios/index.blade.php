<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de formularios') }}
        </h2>
    </x-slot>
    <div class="container-fluid p-0 mb-5" >
        <div class="py-12">
            <div class="container">


<div class='tablaformulario'>


<table class="table">

    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">nombre formulario</th>
        <th scope="col">descripcion formulario</th>
        <th scope="col"></th>
        <th scope="col">Acciones</th>
        <th scope="col"></th>

      </tr>
    </thead>
    <tbody>
        @foreach ($formulario as $formularito)
      <tr>
            <th  scope="row">
                {{$formularito->id}}</th>
                <td>{{$formularito->nombre_formulario}}</td>
                <td>{{$formularito->descripcion_formulario}}</td>
                <td><a href="/formularios/{{$formularito->id}}" class="btn btn-success">Ver</a></td>
                <td><a href="/formularios/{{$formularito->id}}/edit" class="btn btn-primary">Editar</a></td>
                <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Eliminar
                  </button></td>



        @endforeach


         <!-- Modal -->
         <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="delete" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar formulario</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/formularios/{{$formularito->id}}" method="POST">
                    @csrf
                    @method('DELETE')


                <div class="modal-body">
                  ¿Estas seguro de eliminar el formulario {{$formularito->nombre_formulario}}?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NO</button>
                  <button type="submit" class="btn btn-danger">Confirmar</button>

                </form>

                </div>
              </div>
            </div>
          </div>
        </tr>

    </tbody>
  </table>


</div>
</div>


</x-app-layout>
