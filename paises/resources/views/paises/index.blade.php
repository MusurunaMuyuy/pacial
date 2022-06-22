@extends('layouts.layout')
@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista paises</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('paises.create') }}" class="btn btn-info" >Añadir pais</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>nombre</th>
               <th>capital</th>
               <th>idioma</th>
               <th>poblacion</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($paises->count())  
              @foreach($paises as $paises)  
              <tr>
                <td>{{$paises->nombre}}</td>
                <td>{{$paises->capital}}</td>
                <td>{{$paises->idoma}}</td>
                <td>{{$paises->poblacion}}</td>
                <td><a class="btn btn-primary btn-xs" href="{{action('paisesController@edit', $paises->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('paisesController@destroy', $paises->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">

                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 </td>
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              </tr>
              @endif
            </tbody>

          </table>
        </div>
      </div>
      {{ $paises->links() }}
    </div>
  </div>
</section>

@endsection