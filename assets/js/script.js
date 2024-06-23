'use strict';

/**
 * navbar toggle
 */

const overlay = document.querySelector("[data-overlay]");
const navOpenBtn = document.querySelector("[data-nav-open-btn]");
const navbar = document.querySelector("[data-navbar]");
const navCloseBtn = document.querySelector("[data-nav-close-btn]");
const navLinks = document.querySelectorAll("[data-nav-link]");

const navElemArr = [navOpenBtn, navCloseBtn, overlay];

const navToggleEvent = function (elem) {
  for (let i = 0; i < elem.length; i++) {
    elem[i].addEventListener("click", function () {
      navbar.classList.toggle("active");
      overlay.classList.toggle("active");
    });
  }
}

navToggleEvent(navElemArr);
navToggleEvent(navLinks);


const footerTextElement = document.querySelector('.footer-text');
const originalContent = footerTextElement.textContent;

function checkWindowSize() {
  if (window.innerWidth >= 350 && window.innerWidth <= 580) {
    footerTextElement.textContent = '';
  } else {
    footerTextElement.textContent = originalContent;
  }
}

checkWindowSize();

window.addEventListener('resize', checkWindowSize)



/**
 * header sticky & go to top
 */

const header = document.querySelector("[data-header]");
const goTopBtn = document.querySelector("[data-go-top]");

window.addEventListener("scroll", function () {

  if (window.scrollY >= 200) {
    header.classList.add("active");
    goTopBtn.classList.add("active");
  } else {
    header.classList.remove("active");
    goTopBtn.classList.remove("active");
  }

});

function openPopup() {
  document.getElementById('sKPopup').style.display = "block";
}

function closePopup() {
  document.getElementById('sKPopup').style.display = "none";
}

window.onclick = function(event) {
  var popup = document.getElementById('sKPopup');
  if (event.target == popup) {
      popup.style.display = "none";
  }
}

$(document).ready(function() {
  $('.evaluate_wrapper').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    nextArrow: $('.next'),
    prevArrow: $('.prev'),
    responsive: [
      {
        breakpoint: 580,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });
});