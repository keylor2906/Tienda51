@extends('templates.website')

@section('content')

<section id="section-contacto">

  <div class="row">

    <form action="/mensajes" class="col s12" method="POST">

      <div class="row">
        <div class="input-field col s6 push-s3">
          <i class="material-icons prefix fa fa-user"></i>
          <input  id="nombre" type="text" class="validate" name="nombre">
          <label class="active" for="nombre">Nombre</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s6 push-s3">
          <i class="material-icons prefix fa fa-envelope"></i>
          <input  id="email" type="email" class="validate" name="email">
          <label class="active" for="email" data-error="wrong" data-success="right">Email</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s6 push-s3">
          <i class="material-icons prefix fa fa-pencil"></i>
          <input  id="asunto" type="text" class="validate" name="asunto">
          <label class="active" for="asunto">Asunto</label>
        </div>
      </div>
        
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix fa fa-comment-o"></i>
          <textarea id="mensaje" class="materialize-textarea" name="mensaje"></textarea>
          <label for="mensaje">Mensaje</label>
        </div>
      </div>

      <div class="row">
        <div class="col s2 push-s5">
          <button id="btn-enviar" class="btn waves-effect waves-light" type="submit" name="btn-enviar">Enviar
            <i class="material-icons right fa fa-sign-in"></i>
          </button>
        </div>
      </div>

    </form>

  </div> 
</section>


@stop