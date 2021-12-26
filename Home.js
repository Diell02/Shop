window.onscroll = function() {myFunction()};

var header = document.getElementById("Header1");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

//SLIDESHOW
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); 
}


var slide1Index = 0;
showSlide1();

function showSlide1() {
  var i;
  var slide = document.getElementsByClassName("mySlide");
  var dots1 = document.getElementsByClassName("dot1");
  for (i = 0; i < slide.length; i++) {
    slide[i].style.display = "none";  
  }
  slide1Index++;
  if (slide1Index > slide.length) {slide1Index = 1}    
  for (i = 0; i < dots1.length; i++) {
    dots1[i].className = dots1[i].className.replace(" active1", "");
  }
  slide[slide1Index-1].style.display = "block";  
  dots1[slide1Index-1].className += " active1";
  setTimeout(showSlide1, 5000); 
}



