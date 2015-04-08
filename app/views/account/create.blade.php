@extends('layout.main')

@section('content-tab')

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
            <h1>Crear cuenta</h1>
          <form action="{{ URL::route('account-create-post') }}" method="post" class="form-horizontal">
  <div class="form-group">
    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
    <div class="col-sm-10">
      <input type="text" name="name" class="form-control" placeholder="Enter Name" {{ Input::old('name') ? 'value="'.e(Input::old('name')).'"': '' }}>
       @if($errors->has('name'))
           {{ $errors->first('name') }}
       @endif       
    </div>
  </div>
  <div class="form-group">
    <label for="apellido" class="col-sm-2 control-label">Apellido</label>
    <div class="col-sm-10">
     <input type="text" name="last_name" class="form-control" placeholder="Enter Last name" {{ Input::old('last_name') ? 'value="'.e(Input::old('last_name')).'"': '' }}>
                        @if($errors->has('last_name'))
                            {{ $errors->first('last_name') }}
                        @endif
    </div>
  </div>
  <div class="form-group">
    <label for="direccion" class="col-sm-2 control-label">Dirección</label>
    <div class="col-sm-10">
    <input type="text" name="address" class="form-control" placeholder="Enter Address" {{ Input::old('address') ? 'value="'.e(Input::old('address')).'"': '' }}>
                        @if($errors->has('address'))
                            {{ $errors->first('address') }}
                        @endif
    </div>
  </div>
  <div class="form-group">
    <label for="telefono" class="col-sm-2 control-label">Teléfono</label>
    <div class="col-sm-10">
    <input type="text" name="phone" class="form-control" placeholder="Enter Phone" {{ Input::old('phone') ? 'value="'.e(Input::old('phone')).'"': '' }}>
                        @if($errors->has('phone'))
                            {{ $errors->first('phone') }}
                        @endif
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
    <input type="email" name="email" class="form-control" placeholder="Enter email" {{ Input::old('email') ? 'value="'.e(Input::old('email')).'"': '' }}>
                        @if($errors->has('email'))
                            {{ $errors->first('email') }}
                        @endif             
    </div>
  </div>
  <div class="form-group">
    <label for="username" class="col-sm-2 control-label">Nombre de usuario</label>
    <div class="col-sm-10">
    <input type="text" name="username" class="form-control" placeholder="Enter Username" {{ Input::old('username') ? 'value="'.e(Input::old('username')).'"': '' }}>
                        @if($errors->has('username'))
                                {{ $errors->first('username') }}
                        @endif            
    </div>
  </div>            
  <div class="form-group">
    <label for="contrasena" class="col-sm-2 control-label">Contraseña</label>
    <div class="col-sm-10">
    <input type="password" name="password" class="form-control" placeholder="Enter Password">
                        @if($errors->has('password'))
                            {{ $errors->first('password') }}
                        @endif          
    </div>
  </div>
  <div class="form-group">
    <label for="contrasena" class="col-sm-2 control-label">Confirmar Contraseña</label>
    <div class="col-sm-10">
    <input type="password" name="password_again" class="form-control" placeholder="Re Password">
                        @if($errors->has('password_again'))
                            {{ $errors->first('password_again') }}
                        @endif          
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" value="Crear cuenta" class="btn btn-danger">
            {{ Form::token() }}
    </div>
  </div>
</form>
      
    
      </div>

@stop
