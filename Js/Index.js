document.addEventListener("DOMContentLoaded", function() {
  var slides = document.getElementsByClassName("slide");
  var dotsContainer = document.querySelector(".slideshow-dots");
  var dots = [];

  var currentSlide = 0;
  var slideInterval = setInterval(nextSlide, 2000); // Altera a imagem a cada 2 segundos

  function showSlide(n) {
    for (var i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
      dots[i].classList.remove("active");
    }
    slides[n].style.display = "block";
    dots[n].classList.add("active");
  }

  function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
  }

  for (var i = 0; i < slides.length; i++) {
    var dot = document.createElement("span");
    dot.classList.add("dot");
    dot.addEventListener("click", function() {
      currentSlide = Array.prototype.indexOf.call(dots, this);
      showSlide(currentSlide);
    });
    dotsContainer.appendChild(dot);
    dots.push(dot);
  }

  showSlide(currentSlide);
});

window.addEventListener('load', function() {
    var menu = document.querySelector('.menu');
    var imagem = document.querySelector('.slide-imagem');
    var posicaoImagem = imagem.getBoundingClientRect().bottom+ window.pageYOffset;
  
    window.addEventListener('scroll', function() {
      if (window.pageYOffset > posicaoImagem) {
        menu.classList.add('menu-com-sombra');
      } else {
        menu.classList.remove('menu-com-sombra');
      }
    });
  });

  window.addEventListener("load", function() {
    var loader = document.getElementById("loader");
    loader.style.display = "none";
  });
  
