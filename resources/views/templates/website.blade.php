<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Electronicware</title>
	<link rel="stylesheet" type="text/css" href="/css/materialize.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
<header>
	
  <nav class="deep-purple darken-4">
    <div class="nav-wrapper">
      <a href="/" class="brand-logo center"><i class="fa fa-cubes fa-2x"></i>&nbsp Electronicware</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse">&nbsp &nbsp<i class="fa fa-bars"></i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="/tienda"><i class="fa fa-shopping-bag"></i>&nbsp Tienda</a></li>
        <li><a href="/carrito"><i class="fa fa-shopping-cart"></i>&nbsp Carrito</a></li>
        <li><a href="/acerca"><i class="fa fa-question-circle"></i>&nbsp Acerca</a></li>
        <li><a href="/contacto"><i class="fa fa-envelope"></i>&nbsp Contacto</a></li>
        <li><a href="/ingresar"><i class="fa fa-sign-in"></i>&nbsp Ingresar</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="/tienda"><i class="fa fa-shopping-bag"></i>&nbsp Tienda</a></li>
        <li><a href="/carrito"><i class="fa fa-shopping-cart"></i>&nbsp Carrito</a></li>
        <li><a href="/acerca"><i class="fa fa-question-circle"></i>&nbsp Acerca</a></li>
        <li><a href="/contacto"><i class="fa fa-envelope"></i>&nbsp Contacto</a></li>
        <li><a href="/ingresar"><i class="fa fa-sign-in"></i>&nbsp Ingresar</a></li>
      </ul>
    </div>
  </nav>        
</header>

@yield('content')

<footer class="page-footer  deep-purple darken-4">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">
        <i class="fa fa-cubes fa-2x"></i>&nbsp Electronicware
        </h5>
        <p class="grey-text text-lighten-4">La tecnología al alcance de tu mano.</p>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Links</h5>
        <ul>
           <li><a href="/tienda" class="grey-text text-lighten-3">Tienda</a></li>
           <li><a href="/carrito" class="grey-text text-lighten-3">Carrito</a></li>
           <li><a href="/acerca" class="grey-text text-lighten-3">Acerca</a></li>
           <li><a href="/contacto" class="grey-text text-lighten-3">Contacto</a></li>
           <li><a href="/ingresar" class="grey-text text-lighten-3">Ingresar</a></li>
         </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      © 2016 - José Manuel Robles Salazar & Martín Chávez Delgado
      <a class="grey-text text-lighten-4 right btn-social" href="#!"><i class="fa fa-twitter-square fa-2x"></i></a>
      <a class="grey-text text-lighten-4 right btn-social" href="#!"><i class="fa fa-facebook-square fa-2x"></i></a>
    </div>
  </div>
</footer>


  <script src="/js/jquery-2.2.1.min.js"></script>
  <script src="/js/materialize.min.js"></script>
  <script src="/js/app.js"></script>

</body>
</html>