

<label for="Nombre">{{'Nombre'}}</label>
<input type="text" name="Nombre" id="Nombre" value="{{isset($empleado->Nombre)?$empleado->Nombre:''}}">
<br/>
<label for="ApellidoPaterno">{{'ApellidoPaterno'}}</label>
<input type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="{{isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:''}}">
<br/>
<label for="ApellidoMaterno">{{'ApellidoMaterno'}}</label>
<input type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:''}}">
<br/>
<label for="dni">{{'DNI'}}</label>
<input type="text" name="dni" id="dni" value="{{isset($empleado->DNI)?$empleado->DNI:''}}">
<br/>
<label for="cargo">{{'Cargo'}}</label>
<input type="text" name="cargo" id="cargo" value="{{isset($empleado->Cargo)?$empleado->Cargo:''}}">
<br/>
<input type="submit" value="{{$Modo=='crear'?'Agregar empleado':'Modificar empleado'}}">

<a href="{{url('empleados')}}">Regresar</a>