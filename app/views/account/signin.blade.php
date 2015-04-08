@extends('layout.main')

@section('content')
<div class="container">
      <!-- Main component for a primary marketing message or call to action -->
      <div style="width: 100%; overflow: hidden; padding: 20px;">
          <div style=" float: left;">
              <h3>Detalles</h3>
              <ul>
                  <li>Detalle uno</li>
                  <li>Detalle dos</li>
                  <li>Detalle tres</li>
              </ul>
          </div>
          <div id="login" class="jumbotron">

              <div style="">
                  {{ Form::open(array('url' => 'login')) }}
                      <div class="form-group">
                          <h1>Login</h1>
                      </div>

                      <div class="form-group">
                          <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                          <div class="col-sm-7">
                              <input type="text" name="email" class="form-control" placeholder="Enter Email" {{ Input::old('email') ? 'value="'.e(Input::old('email')).'"': '' }}>
                                     @if($errors->has('email'))
                                     {{ $errors->first('email') }}
                                     @endif
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Contraseña</label>
                          <div class="col-sm-7">
                              <input type="password" name="password" class="form-control" placeholder="Enter Password" {{ Input::old('password') ? 'value="'.e(Input::old('password')).'"': '' }}>
                                     @if($errors->has('password'))
                                     {{ $errors->first('password') }}
                                     @endif
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-primary">Ingresar</button>
                              {{ Form::token() }}
                          </div>
                      </div>
                  </form>
              </div>    
          </div>
      </div>
@stop
