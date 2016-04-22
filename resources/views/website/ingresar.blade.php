@extends('templates.website')

@section('content')

<section id="section-ingresar" class="container">

  <div class="row">

    <form class="col s12" method="post" action="/login">
    {{ csrf_field() }}
      <div class="card-panel">  
        @if(Session::has('error'))
          <p class="error">Usuario o contraseña erroneo</p>
        @endif
        <div class="row">
          <div class="input-field col s6 push-s3">
            <i class="material-icons prefix fa fa-user"></i>
            <input name="email" id="email" type="email" class="validate">
            <label class="active" for="email">Email</label>
          </div>

        </div>

        <div class="row">
          <div class="input-field col s6 push-s3">
            <i class="material-icons prefix fa fa-key"></i>
            <input name="password" id="password" type="password" class="validate">
            <label class="active" for="password">Password</label>
          </div>

        </div>
        
        <div class="row">
         <div class="col s2 push-s5">
            <button id="btn-ingresar" class="btn waves-effect waves-light" type="submit" name="btn-ingresar">Ingresar
              <i class="material-icons right fa fa-sign-in"></i>
            </button>
            <a href="/registrar">Registrarse</a>
          </div>

        </div>

      </div>

    </form>

  </div>

</section>

@stop