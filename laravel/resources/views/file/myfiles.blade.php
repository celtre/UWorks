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
                           <td>{{ $file->descripcion  }}</td>
                           <td>{{ $file->path }}</td>


                             <td>
                              <div class="btn-group">
                                  <a class="btn btn-primary" href="#">Download</a>
                              </div>
                              </td>
                              <td>
                               <form method="POST" action="{{ route('delete') }}" accept-charset="UTF-8" enctype="multipart/form-data">

                                 <input type="hidden" name="tipo" value="{{ $file->tipo }}"><br>
                                 <input type="hidden" name="materia" value="{{ $file->materia }}"><br>
                                 <input type="hidden" name="nombre" value="{{ $file->path }}"><br>
                            <div class="btn-group">
                                <input type="submit"  value="Delete" class="btn btn-primary" >
                            </div>
                          </form>
                            </td>
                        </tr>
                          @empty
                          <p>No hay archivo por ahora...</p>
                        @endforelse

                     </tbody>
                  </table>
                </section>
            </div>
        </div>

        @endsection
