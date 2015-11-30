@extends('layout')

@section('content')
    <br><br><br><br>
    <div class="container">
  	@include('partials/errors')
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Agregar archivos</div>
                    <div class="panel-body">

                        <form method="POST" action="{{ route('file') }}" accept-charset="UTF-8" enctype="multipart/form-data">

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label class="col-md-4 control-label">Nuevo Archivo</label>
                                <div class="col-md-6">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" name="nombre">
                                      <label for="descripcion">Descripcion</label>
                                    <textarea type="text" class="form-control" name="descripcion" cols="40" rows="5"></textarea>
                                      <label for="tipo">Tipo de documento</label>
                                      <select name="tipo">
                                        <option value="" selected="selected">- selecciona -</option>
                                        <option value="documentos">Documento</option>
                                        <option value="libros">Libro</option>
                                        <option value="parcial">Parcial</option>
                                      </select>
                                        <label for="materia">Materia</label>
                                      <select name="materia">
                                        <option value="" selected="selected">- selecciona -</option>
                                          @forelse ($subject as $subjects)
                                        <option value="{{ $subjects->nombre }}">{{ $subjects->nombre }}</option>
                                        @empty
                                        <p>No hay materias por ahora...</p>
                                      @endforelse
                                      </select>

                                    <input type="file" class="form-control" name="file" >
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
