@extends('layout')

@section('content')


<div class="container">
@if(Session::has('Mensaje')){{
    Session::get('Mensaje')

}}
@endif

<a href="{{url('empleados/create')}}">Agregar empleados</a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>DNI </th>
            <th>Cargo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($empleados as $empleado)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$empleado->Nombre}}</td>
            <td>{{$empleado->ApellidoPaterno}}</td>
            <td>{{$empleado->ApellidoMaterno}}</td>
            <td>{{$empleado->DNI}}</td>
            <td>{{$empleado->Cargo}}</td>
            <td>
                <a href="{{url('/empleados/'.$empleado->id.'/edit')}}">
                    Editar
                </a>

                |
                <form method="post" action="{{url('/empleados/'.$empleado->id)}}">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <button type="submit" onclick="return confirm('¿Borrar?')">Borrar</button>

                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
