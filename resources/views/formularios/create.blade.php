<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear formulario') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="container-fluid p-0 mb-5" >
        <div class="py-12">

            <form action="/formularios" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="mb-3">

                    <label for="nombre formulario" class="form-label">nombre del formulario</label>
                    <input type ="text" class="form-control" id="nombreformulario" name="nombre_formulario">
                    <br>

                    <label for="descripcion formulario" class="form-label">descripcion del formulario</label>
                    <input type="text" class="form-control" id="descripcionformulario" name="descripcion_formulario">
                    <br>

                    {{-- <label for="cantidad de preguntas" class="form-label"> Cuantas preguntas tendrá el formulario</label>
                    <input type ="text" class="form-control" id="cantidadpreguntas" name="cantidad_preguntas">
                    <br> --}}
                    <div class="form-group">
                        <label for="imagen">Cargar una imagen </label>
                        <br>

                        <input name="imagen" id="imagen" type="file">
                        <br>
                    </div>

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Crear formulario
                    </button>
                    <br>
                    <br>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="create" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">crear formularios</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                  ¿Estas seguro de guarda el formulario?
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NO</button>
                    <button type="submit" class="btn btn-primary">SI</button>

                </div>
              </div>
            </div>
          </div>




            </div>

        </form>
        {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div> --}}
        </div>
        </div>
    </div>
</x-app-layout>
