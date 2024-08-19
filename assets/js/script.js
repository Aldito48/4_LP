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

function openSnK() {
  document.getElementById('sKPopup').style.display = "block";
}

function closeSnK() {
  document.getElementById('sKPopup').style.display = "none";
}

function openItinerary() {
  document.getElementById('itinerary').style.display = "block";

  $(document).ready(function() {
    if ($('.itinerary-wrapper').hasClass('slick-initialized')) {
      $('.itinerary-wrapper').slick('unslick');
    }

    $('.itinerary-wrapper').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: false,
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

    $('.itinerary-wrapper').slick('slickGoTo', 0);
  });
}

function closeItinerary() {
  document.getElementById('itinerary').style.display = "none";
}

function openItinerary2() {
  document.getElementById('itinerary-2').style.display = "block";
}

function closeItinerary2() {
  document.getElementById('itinerary-2').style.display = "none";
}

window.onclick = function(event) {
  var popup = document.getElementById('sKPopup');
  var itinerary = document.getElementById('itinerary');
  var itinerary2 = document.getElementById('itinerary-2');
  if (event.target == popup) {
    popup.style.display = "none";
  }
  if (event.target == itinerary) {
    itinerary.style.display = "none";
  }
  if(event.target == itinerary2) {
    itinerary2.style.display = "none";
  }
}

$(document).ready(function() {
  $('.evaluate_wrapper').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    pauseOnHover: false,
    pauseOnFocus: false,
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