//alert("iniciando");

//efecto responsivo para la barra de cabesera
 $(".button-collapse").sideNav();

//efecto para carrusel
 $(document).ready(function(){
      $('.carousel').carousel();
   });
 // Next slide
$('.carousel').carousel('next');
$('.carousel').carousel('next', [3]); // Move next n times.
// Previous slide
$('.carousel').carousel('prev');
$('.carousel').carousel('prev', [4]); // Move prev n times.

 $('.slider').slider();

 
$(".dropdown-button").dropdown();
        