'use strict';



/**
 * navbar toggle
 */

const navbar = document.querySelector("[data-navbar]");
const navToggler = document.querySelectorAll("[data-nav-toggler]");
const navLinks = document.querySelectorAll("[data-nav-link]");
const overlay = document.querySelector("[data-overlay]");

for (let i = 0; i < navToggler.length; i++) {
  navToggler[i].addEventListener("click", function () {
    navbar.classList.toggle("active");
    overlay.classList.toggle("active");
  });
}

for (let i = 0; i < navLinks.length; i++) {
  navLinks[i].addEventListener("click", function () {
    navbar.classList.remove("active");
    overlay.classList.remove("active");
  });
}



/**
 * header
 */

const header = document.querySelector("[data-header]");
const backTopBtn = document.querySelector("[data-back-top-btn]");

window.addEventListener("scroll", function () {
  if (window.scrollY >= 100) {
    header.classList.add("active");
    backTopBtn.classList.add("active");
  } else {
    header.classList.remove("active");
    backTopBtn.classList.remove("active");
  }
});


/**
 * hero
 */

function escribirTexto(id) {
  var spanTexto = document.getElementById(id);
  var texto = spanTexto.textContent;
  spanTexto.textContent = '';
  var count = 0;

  function agregarLetras() {
      spanTexto.textContent += texto[count];
      count++;

      if (count < texto.length) {
          setTimeout(agregarLetras, 150); // Ajusta el valor para una escritura más lenta
      } else {
          setTimeout(function() {
              escribirTexto(id);
          }, 2000);
      }
  }

  agregarLetras();
}

escribirTexto("texto1");
escribirTexto("texto2");


(function(){
  const titleQuestions = [...document.querySelectorAll('.questions__title')];
  console.log(titleQuestions)

  titleQuestions.forEach(question =>{
      question.addEventListener('click', ()=>{
          let height = 0;
          let answer = question.nextElementSibling;
          let addPadding = question.parentElement.parentElement;

          addPadding.classList.toggle('questions__padding--add');
          question.children[0].classList.toggle('questions__arrow--rotate');

          if(answer.clientHeight === 0){
              height = answer.scrollHeight;
          }

          answer.style.height = `${height}px`;
      });
  });
})();