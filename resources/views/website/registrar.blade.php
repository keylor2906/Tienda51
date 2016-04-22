@extends('templates.website')

@section('content')

<section id="section-ingresar" class="container">

  <div class="row">

    <form class="col s12" method="post" action="/registrar">
    {{ csrf_field() }}
      <div class="card-panel">  
        <div class="row">
          <div class="input-field col s6 push-s3">
            <i class="material-icons prefix fa fa-user"></i>
            <input name="nombre" id="nombre" type="text" class="validate">
            <label class="active" for="nombre">Nombre</label>
          </div>

        </div>

        <div class="row">
          <div class="input-field col s6 push-s3">
            <i class="material-icons prefix fa fa-user"></i>
            <input name="nick" id="nick" type="text" class="validate">
            <label class="active" for="nick">Nick</label>
          </div>

        </div>

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
            <a href="/" class="btn waves-effect waves-light">Regresar</a>
            <button id="btn-registrar" class="btn waves-effect waves-light" type="submit" name="btn-registrar">Registrar
              <i class="material-icons right fa fa-sign-in"></i>
            </button>

          </div>

        </div>

      </div>

    </form>

  </div>

</section>
@stop