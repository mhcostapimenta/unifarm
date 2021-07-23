$(document).ready(function () {
  // Controla o Acordion das perguntas
  $('.enunciado').click(function () {
    if ($(this).next('.resposta').hasClass('active')) {
      $(this).next('.resposta').removeClass('active').slideUp();
    } else {
      $('.pergunta .resposta').removeClass('active').slideUp();
      $(this).next('.resposta').addClass('active').slideDown();
    }
  }); // Cria o carrousel da sesso APOIO

  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 3000,
    dots: false,
    lazyload: true,
    nav: false,
    responsive: {
      0: {
        items: 1,
      },
      576: {
        items: 2,
      },
      768: {
        items: 3,
      },
      992: {
        items: 5,
      },
    },
  });

  // Remove better-nav quando clicar em um link
  $('#side-menu').on('click', '.nav-link', function () {
    var body = $('body');
    var overlay = $('.side-menu-overlay');
    var sideMenu = $('#side-menu');

    function slideOut() {
      body.removeClass('side-menu-visible');
      overlay.fadeOut();
      setTimeout(function () {
        sideMenu.hide();
        body.removeClass('overflow-hidden');
      }, 400);
    }

    slideOut();
  });

  // Rotina para limpar os atributos das imagens
  function limpaWidgetImg() {
    $('#apoio figure')
      .removeClass('wp-block-image')
      .removeClass('size-full')
      .addClass('parceiros');

    $('#apoio img')
      .removeAttr('width')
      .removeAttr('height')
      .removeAttr('style')
      .removeAttr('class')
      .addClass('img-fluid');
  }

  limpaWidgetImg();
});

// Função para ativar animação pelo Scroll
// Colocar o classe animate no elemento a ser animado e efeito criado no CSS no atributo data-effect
function ativaNoScroll() {
  document.querySelectorAll('.animate').forEach((objeto, index) => {
    if (objeto.getBoundingClientRect().top < window.innerHeight) {
      objeto.classList.add(objeto.dataset.effect);
    } else {
      objeto.classList.remove(objeto.dataset.effect);
      objeto.style.opacity = '0';
    }
  });
}

window.addEventListener('scroll', ativaNoScroll);
