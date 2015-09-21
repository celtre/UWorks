@extends('layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Home</div>
                    <div class="panel-body">

                        <p>Bienvenido a Proyecto P</p>
                                </div>

                                <table>
                <thead>
                    <tr>
                        <th>Mis archivos</th><th>Eliminar</th>
                    </tr>
                </thead>
                @foreach ($movie as $movie)


                <tbody>

                    <tr>
                        <td><a href="{{ route('formulario/{archivo}') }}">{{ $movie->file }}</a>
                      </td>

                      <td>
                        <form method="POST" action="{{ route('eliminar/{archivo}') }}" accept-charset="UTF-8" enctype="multipart/form-data">
                      <input type="submit" value="eliminar"/>
                      </form>
                    </td>
                    </tr>

                </tbody>
                @endforeach
            </table>

                    </div>
                </div>
            </div>
        </div>

@endsection
