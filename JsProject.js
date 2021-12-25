//HEADER LABELS
window.onload = function(){
    document.getElementById("Home").onclick = function () {
        location.href = "Home.html";
    }



    document.getElementById("Contact_Us").onclick = function () {
        location.href = "Contact.html";
    }



    document.getElementById("About_Us").onclick = function () {
        location.href = "About.html";
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
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}

