@extends('layout')

@section('content')

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
    <ol class="breadcrumb">
      <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
      <li><i class="fa fa-table"></i>Table</li>
      <li><i class="fa fa-th-list"></i>Basic Table</li>
    </ol>
  </div>
</div>
        <!-- page start-->



                    <table class="table table-striped table-advance table-hover">
                     <tbody>
                        <tr>
                           <th><i class="icon_documents_alt"></i> Archive</th>
                           <th><i class="icon_calendar"></i> Date</th>
                           <th><i class="icon_profile"></i> User</th>
                           <th><i class="icon_document"></i> Description</th>
                           <th colspan="3"><i class="icon_cogs"></i> Action</th>
                        </tr>

                        @forelse ($files as $file)
                        <tr>
                           <td>{{ $file->nombre }}</td>
                           <td>{{ $file->created_at }}</td>
                           <td>{{ $file->name }}</td>
                           <td>{{ $file->descripcion }}</td>


                             <td>
                              <div class="btn-group">
                                  <a class="btn btn-primary" href="formulario/{{ $file->nombre_original }}">Download</a>
                              </div>
                              </td>
                              @if(Auth::user()->name == $file->name)
                              <td>
                               <div class="btn-group">
                                   <a class="btn btn-primary" href="myfiles/eliminar/{{ $file->nombre_original }}">Delete</a>
                               </div>
                               </td>
                               @endif
                        </tr>
                          @empty
                          <p>No hay parciales por ahora...</p>

                        @endforelse

                     </tbody>



                  </table>

                </section>
            </div>
        </div>

        @endsection
