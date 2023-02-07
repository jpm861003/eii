var principal = new Swiper('.swiper-container', {
     // Optional parameters
     direction: 'vertical',
     loop: true,

     autoplay: {
        delay: 4000,
      },

     // If we need pagination
     pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: 'true',
    },
});
   
var editoriales = new Swiper('.swiper-editoriales', {
  slidesPerView: 4,
  spaceBetween: 1,
  loop:true,
  autoplay: {
    delay: 4000,
  },
  // init: false,
  scrollbar: {
    el: '.swiper-scrollbar',
    hide: true,
  },
  breakpoints: {
    450: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    880: {
      slidesPerView: 3,
      spaceBetween: 40,
    },

    1024: {
      slidesPerView: 4,
      spaceBetween: 50,
    },
  }
});

var editoriales = new Swiper('.swiper-editoriales-programas', {
  slidesPerView: 4,
  spaceBetween: 1,
  loop:true,
  autoplay: {
    delay: 4000,
  },
  // init: false,
  scrollbar: {
    el: '.swiper-scrollbar',
    hide: true,
  },
  breakpoints: {
    450: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    880: {
      slidesPerView: 2,
      spaceBetween: 40,
    },

    1024: {
      slidesPerView: 3,
      spaceBetween: 50,
    },

    1200: {
      slidesPerView: 4,
      spaceBetween: 50,
    },
  }
});

var revistas = new Swiper('.swiper-revistas', {
  slidesPerView: 3,
  spaceBetween: 1,
  loop:true,
  //autoplay: {
    //delay: 4000,
  //},
  // init: false,
  scrollbar: {
    el: '.swiper-scrollbar',
    hide: true,
  },
  breakpoints: {
    450: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    880: {
      slidesPerView: 3,
      spaceBetween: 40,
    },

    1024: {
      
      spaceBetween: 50,
    },
  }
});

var revistas = new Swiper('.swiper-audiovisuales', {
  slidesPerView: 3,
  spaceBetween: 1,
  loop:true,
  // init: false,
  scrollbar: {
    el: '.swiper-scrollbar',
    hide: true,
  },
  breakpoints: {
    450: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
    640: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    880: {
      slidesPerView: 1,
      spaceBetween: 30,
    },

    1024: {
      slidesPerView: 2,
      spaceBetween: 50,
    },

    1260: {
      slidesPerView: 2,
      spaceBetween: 50,
    },

  }
});


var swiper = new Swiper('.swiper-extras', {
  loop: true,
  autoplay:{
    delay: 4000,
  },
  effect: 'coverflow',
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: 'auto',
  coverflowEffect: {
    rotate: 15,
    stretch: 100,
    depth: 10,
    modifier: 1,
    slideShadows: false,
  },
  pagination: {
    el: '.swiper-pagination',
  },
});


$(document).ready(function(){

  $('.up').click(function(){
      $('body, html').animate({
        scrollTop: '0px'
      }, 300);
  });
});

function inicia(){
  var xIni;
  var yIni;
  var canvas = document.getElementById('objeto');
  canvas.addEventListener('touchstart', function(e){
      if (e.targetTouches.length == 1) {
  var touch = e.targetTouches[0];
  xIni = touch.pageX;
  yIni = touch.pageY;
}
  }, false);
  
  canvas.addEventListener('touchmove', function(e){
      if (e.targetTouches.length == 1) {
  var touch = e.targetTouches[0];
  if((touch.pageX>xIni+20) && (touch.pageY> yIni-5) && (touch.pageY<yIni+5)){
     alert("el swipe se genera hacia la izquierda");
  }
  
  if((touch.pageX<xIni-20) && (touch.pageY> yIni-5) && (touch.pageY<yIni+5)){
     alert("el swipe se genera hacia la derecha");
  }
}
  }, false);
  
             
}

function mostrarConsejoInterno() {
  div = document.getElementById('flotanteConsejo');
  div.style.display = 'flex';
  div.style.transition = 'all 500ms ease-out';
}

function cerrarConsejoInterno() {
  div = document.getElementById('flotanteConsejo');
  div.style.display = 'none';
  div.style.transition = 'all 500ms ease-out';
}

function mostrarFormatos() {
  div = document.getElementById('flotanteFormatos');
  div.style.display = 'flex';
  div.style.transition = 'all 500ms ease-out';
}

function cerrarFormatos() {
  div = document.getElementById('flotanteFormatos');
  div.style.display = 'none';
  div.style.transition = 'all 500ms ease-out';
}

function mostrarPorServicio() {
  div = document.getElementById('flotantePorServicio');
  div.style.display = 'flex';
  div.style.transition = 'all 500ms ease-out';
}

function cerrarPorServicio() {
  div = document.getElementById('flotantePorServicio');
  div.style.display = 'none';
  div.style.transition = 'all 500ms ease-out';
}

function mostrarSabatico() {
  div = document.getElementById('flotanteSabatico');
  div.style.display = 'flex';
  div.style.transition = 'all 500ms ease-out';
}

function cerrarSabatico() {
  div = document.getElementById('flotanteSabatico');
  div.style.display = 'none';
  div.style.transition = 'all 500ms ease-out';
}

function mostrarMovilidad() {
  div = document.getElementById('flotanteMovilidad');
  div.style.display = 'flex';
  div.style.transition = 'all 500ms ease-out';
}

function cerrarMovilidad() {
  div = document.getElementById('flotanteMovilidad');
  div.style.display = 'none';
  div.style.transition = 'all 500ms ease-out';
}

function mostrarBecas() {
  div = document.getElementById('flotanteBecas');
  div.style.display = 'flex';
  div.style.transition = 'all 500ms ease-out';
}

function cerrarBecas() {
  div = document.getElementById('flotanteBecas');
  div.style.display = 'none';
  div.style.transition = 'all 500ms ease-out';
}

function mostrarPromocion() {
  div = document.getElementById('flotantePromocion');
  div.style.display = 'flex';
  div.style.transition = 'all 500ms ease-out';
}

function cerrarPromocion() {
  div = document.getElementById('flotantePromocion');
  div.style.display = 'none';
  div.style.transition = 'all 500ms ease-out';
}

function mostrarCoLiPe() {
  div = document.getElementById('flotanteCoLiPe');
  div.style.display = 'flex';
  div.style.transition = 'all 500ms ease-out';
}

function cerrarCoLiPe() {
  div = document.getElementById('flotanteCoLiPe');
  div.style.display = 'none';
  div.style.transition = 'all 500ms ease-out';
}

function mostrarPlanEditorial() {
  div = document.getElementById('flotantePlanEditorial');
  div.style.display = 'flex';
  div.style.transition = 'all 500ms ease-out';
}

function cerrarPlanEditorial() {
  div = document.getElementById('flotantePlanEditorial');
  div.style.display = 'none';
  div.style.transition = 'all 500ms ease-out';
}

function mostrarActasEditorial() {
  div = document.getElementById('flotanteActasEditorial');
  div.style.display = 'flex';
  div.style.transition = 'all 500ms ease-out';
}

function cerrarActasEditorial() {
  div = document.getElementById('flotanteActasEditorial');
  div.style.display = 'none';
  div.style.transition = 'all 500ms ease-out';
}

function mostrarProdAudiovisual() {
  div = document.getElementById('flotanteProdAudiovisual');
  div.style.display = 'flex';
  div.style.transition = 'all 500ms ease-out';
}

function cerrarProdAudiovisual() {
  div = document.getElementById('flotanteProdAudiovisual');
  div.style.display = 'none';
  div.style.transition = 'all 500ms ease-out';
}

function mostrarDeTrabajo() {
  div = document.getElementById('flotanteDeTrabajo');
  div.style.display = 'flex';
  div.style.transition = 'all 500ms ease-out';
}

function cerrarDeTrabajo() {
  div = document.getElementById('flotanteDeTrabajo');
  div.style.display = 'none';
  div.style.transition = 'all 500ms ease-out';
}

function mostrarOficiales() {
  div = document.getElementById('flotanteOficiales');
  div.style.display = 'flex';
  div.style.transition = 'all 500ms ease-out';
}

function cerrarOficiales() {
  div = document.getElementById('flotanteOficiales');
  div.style.display = 'none';
  div.style.transition = 'all 500ms ease-out';
}

function mostrarInformesProgra() {
  div = document.getElementById('flotanteInformes');
  div.style.display = 'flex';
  div.style.transition = 'all 500ms ease-out';
}

function cerrarInformesProgra() {
  div = document.getElementById('flotanteInformes');
  div.style.display = 'none';
  div.style.transition = 'all 500ms ease-out';
}

function mostrarPresupuesto() {
  div = document.getElementById('flotantePresupuesto');
  div.style.display = 'flex';
  div.style.transition = 'all 500ms ease-out';
}

function cerrarPresupuesto() {
  div = document.getElementById('flotantePresupuesto');
  div.style.display = 'none';
  div.style.transition = 'all 500ms ease-out';
}

function mostrarInterno() {
  div = document.getElementById('flotante');
  div.style.display = 'flex';
  div.style.transition = 'all 500ms ease-out';
}

function cerrarInterno() {
  div = document.getElementById('flotante');
  div.style.display = 'none';
  div.style.transition = 'all 500ms ease-out';
}

function mostrarBiblioteca() {
  div = document.getElementById('flotanteBiblioteca');
  div.style.display = 'flex';
  div.style.transition = 'all 500ms ease-out';
}

function cerrarBiblioteca() {
  div = document.getElementById('flotanteBiblioteca');
  div.style.display = 'none';
  div.style.transition = 'all 500ms ease-out';
}

function mostrarGenero() {
  div = document.getElementById('flotanteGenero');
  div.style.display = 'flex';
 
  div.style.transition = 'all 500ms ease-out';
}

function cerrarGenero() {
  div = document.getElementById('flotanteGenero');
  div.style.display = 'none';
  div.style.transition = 'all 500ms ease-out';
}

function mostrarComisionEspecial() {
  div = document.getElementById('flotanteComisionEspecial');
  div.style.display = 'flex';
 
  div.style.transition = 'all 500ms ease-out';
}

function cerrarComisionEspecial() {
  div = document.getElementById('flotanteComisionEspecial');
  div.style.display = 'none';
  div.style.transition = 'all 500ms ease-out';
}

function mostrarDictaminadora() {
  div = document.getElementById('flotanteDictaminadora');
  div.style.display = 'flex';
 
  div.style.transition = 'all 500ms ease-out';
}

function cerrarDictaminadora() {
  div = document.getElementById('flotanteDictaminadora');
  div.style.display = 'none';
  div.style.transition = 'all 500ms ease-out';
}

function mostrarPrimas() {
  div = document.getElementById('flotantePrimas');
  div.style.display = 'flex';
 
  div.style.transition = 'all 500ms ease-out';
}

function cerrarPrimas() {
  div = document.getElementById('flotantePrimas');
  div.style.display = 'none';
  div.style.transition = 'all 500ms ease-out';
}

function mostrarEditorial() {
  div = document.getElementById('flotanteEditorial');
  div.style.display = 'flex';
  div.style.transition = 'all 500ms ease-out';
}

function cerrarEditorial() {
  div = document.getElementById('flotanteEditorial');
  div.style.display = 'none';
  div.style.transition = 'all 500ms ease-out';
}

function mostrarContinua() {
  div = document.getElementById('flotanteContinua');
  div.style.display = 'flex';
  div.style.transition = 'all 500ms ease-out';
}

function cerrarContinua() {
  div = document.getElementById('flotanteContinua');
  div.style.display = 'none';
  div.style.transition = 'all 500ms ease-out';
}

function mostrarComputo() {
  div = document.getElementById('flotanteComputo');
  div.style.display = 'flex';
  div.style.transition = 'all 500ms ease-out';
}

function cerrarComputo() {
  div = document.getElementById('flotanteComputo');
  div.style.display = 'none';
  div.style.transition = 'all 500ms ease-out';
}

function mostrarSuperacion() {
  div = document.getElementById('flotanteSuperacion');
  div.style.display = 'flex';
  div.style.transition = 'all 500ms ease-out';
}

function cerrarSuperacion() {
  div = document.getElementById('flotanteSuperacion');
  div.style.display = 'none';
  div.style.transition = 'all 500ms ease-out';
}

function mostrarRepresentanteSociales() {
  div = document.getElementById('flotanteRepresentanteSociales');
  div.style.display = 'flex';
  div.style.transition = 'all 500ms ease-out';
}

function cerrarRepresentanteSociales() {
  div = document.getElementById('flotanteRepresentanteSociales');
  div.style.display = 'none';
  div.style.transition = 'all 500ms ease-out';
}

function mostrarConsejoHumanidades() {
  div = document.getElementById('flotanteConsejoHumanidades');
  div.style.display = 'flex';
  div.style.transition = 'all 500ms ease-out';
}

function cerrarConsejoHumanidades() {
  div = document.getElementById('flotanteConsejoHumanidades');
  div.style.display = 'none';
  div.style.transition = 'all 500ms ease-out';
}

function mostrarTecnico() {
  div = document.getElementById('flotanteTecnico');
  div.style.display = 'flex';
  div.style.transition = 'all 500ms ease-out';
}

function cerrarTecnico() {
  div = document.getElementById('flotanteTecnico');
  div.style.display = 'none';
  div.style.transition = 'all 500ms ease-out';
}

function mostrarOrientadoras() {
  div = document.getElementById('flotanteOrientadoras');
  div.style.display = 'flex';
  div.style.transition = 'all 500ms ease-out';
}

function cerrarOrientadoras() {
  div = document.getElementById('flotanteOrientadoras');
  div.style.display = 'none';
  div.style.transition = 'all 500ms ease-out';
}

let scrollUp = document.querySelectorAll(".scrollUp");

function mostrarScrollUp(){
  let scrollTop = document.documentElement.scrollTop;
  for (var i =0; i < scrollUp.length; i++){
    let altura = scrollUp[i].offsetTop;
    if(altura - 500 < scrollTop){
      scrollUp[i].style.opacity = 1;
      scrollUp[i].classList.add("mostrarArriba");
    }
  }
}

let scrollRight = document.querySelectorAll(".scrollRight");

function mostrarScrollRight(){
  let scrollTop = document.documentElement.scrollTop;
  for (var i =0; i < scrollRight.length; i++){
    let altura = scrollRight[i].offsetTop;
    if(altura - 500 < scrollTop){
      scrollRight[i].style.opacity = 1;
      scrollRight[i].classList.add("mostrarDerecha");
    }
  }
}

let scrollLeft = document.querySelectorAll(".scrollLeft");

function mostrarScrollLeft(){
  let scrollTop = document.documentElement.scrollTop;
  for (var i =0; i < scrollLeft.length; i++){
    let altura = scrollLeft[i].offsetTop;
    if(altura - 500 < scrollTop){
      scrollLeft[i].style.opacity = 1;
      scrollLeft[i].classList.add("mostrarIzquierda");
    }
  }
}

function subir(){
$(document).ready(function (){
  $('html, body').animate({
   scrollTop: 0
    }, 1000);
  });
}

function ventanaEmergenteCurriculo() {  
 jQuery.fn.doModal = function(){
          var w = $(window).width();
          var h = $(window).height();
          var divW = $(this).width();
          var divH = $(this).height();
          $(this).css({
             'position': 'absolute',
             'left': (w/2)-(divW/2)+"px",
             'top': (h)-(divH/2)-"px",
             'z-index': '999'
                     });
          $(this).fadeIn(500);
          }
          $(document).ready(function(){
          $("#abrirCurriculo").click(function(){
          $("#ventana_emergente").doModal();
          });
          $("#cerrarCurriculo").click(function(){
          $("#ventana_emergente").css('display', 'none');
       });    
    });
}

function ventanaEmergenteLineas() {  
 jQuery.fn.doModal = function(){
          var w = $(window).width();
          var h = $(window).height();
          var divW = $(this).width();
          var divH = $(this).height();
          $(this).css({
             'position': 'absolute',
             'left': (w/2)-(divW/2)+"px",
             'top': (h)-(divH/2)-"px",
             'z-index': '999'
                     });
          $(this).fadeIn(500);
          }
          $(document).ready(function(){
          $("#abrirLineas").click(function(){
          $("#ventana_lineas").doModal();
          });
          $("#cerrarLineas").click(function(){
          $("#ventana_lineas").css('display', 'none');
       });    
    });
}

function ventanaEmergentePublicaciones() {  
 jQuery.fn.doModal = function(){
          var w = $(window).width();
          var h = $(window).height();
          var divW = $(this).width();
          var divH = $(this).height();
          $(this).css({
             'position': 'absolute',
             'left': (w/2)-(divW/2)+"px",
             'top': (h)-(divH/2)-"px",
             'z-index': '999'
                     });
          $(this).fadeIn(500);
          }
          $(document).ready(function(){
          $("#abrirPublicaciones").click(function(){
          $("#ventana_publicaciones").doModal();
          });
          $("#cerrarPublicaciones").click(function(){
          $("#ventana_publicaciones").css('display', 'none');
       });    
    });
}

function ventanaEmergenteDocencia() {  
 jQuery.fn.doModal = function(){
          var w = $(window).width();
          var h = $(window).height();
          var divW = $(this).width();
          var divH = $(this).height();
          $(this).css({
             'position': 'absolute',
             'left': (w/2)-(divW/2)+"px",
             'top': (h)-(divH/2)-"px",
             'z-index': '999'
                     });
          $(this).fadeIn(500);
          }
          $(document).ready(function(){
          $("#abrirDocencia").click(function(){
          $("#ventana_docencia").doModal();
          });
          $("#cerrarDocencia").click(function(){
          $("#ventana_docencia").css('display', 'none');
       });    
    });
}

function ventanaEmergenteAsociaciones() {  
 jQuery.fn.doModal = function(){
          var w = $(window).width();
          var h = $(window).height();
          var divW = $(this).width();
          var divH = $(this).height();
          $(this).css({
             'position': 'absolute',
             'left': (w/2)-(divW/2)+"px",
             'top': (h)-(divH/2)-"px",
             'z-index': '999'
                     });
          $(this).fadeIn(500);
          }
          $(document).ready(function(){
          $("#abrirAsociaciones").click(function(){
          $("#ventana_asociaciones").doModal();
          });
          $("#cerrarAsociaciones").click(function(){
          $("#ventana_asociaciones").css('display', 'none');
       });    
    });
}

function ventanaEmergenteLigas() {  
 jQuery.fn.doModal = function(){
          var w = $(window).width();
          var h = $(window).height();
          var divW = $(this).width();
          var divH = $(this).height();
          $(this).css({
             'position': 'absolute',
             'left': (w/2)-(divW/2)+"px",
             'top': (h)-(divH/2)-"px",
             'z-index': '999'
                     });
          $(this).fadeIn(500);
          }
          $(document).ready(function(){
          $("#abrirLigas").click(function(){
          $("#ventana_ligas").doModal();
          });
          $("#cerrarLigas").click(function(){
          $("#ventana_ligas").css('display', 'none');
       });    
    });
        
}




window.addEventListener('scroll', mostrarScrollUp);
window.addEventListener('scroll', mostrarScrollRight);
window.addEventListener('scroll', mostrarScrollLeft);