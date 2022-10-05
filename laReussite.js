var imageSlides = ["images/s0.jpeg", "images/s00.jpeg", "images/s7.jpeg", "images/s5.jpg"];
var time = 2000;
var i = 0;

function changeImg() {
  document.slide.src = imageSlides[i];

  if (i < imageSlides.length - 1) {
    i++;
  } else {
    i = 0;
  }
  setTimeout("changeImg()", time);
}
//EXecute la fonction lorsque la page se charge
window.onload = changeImg;

/**************** silder2  Accuil *************/
animation2();

function animation2() {
  var x = document.getElementsByClassName("slider");
  var i;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  for (i = 0; i < 7; i++) {
    x[i].style.display = "block";
  }

}
function pres() {
  var x = document.getElementsByClassName("slider");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
    if (i >= 3) x[i].style.display = "block";
  }

}

