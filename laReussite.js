var imageSlides = ["https://www.socialnetlink.org/wp-content/uploads/2020/06/education-afrique.jpg",
        "https://us.123rf.com/450wm/twinsterphoto/twinsterphoto1905/twinsterphoto190500022/124612054-gros-plan-sur-des-enfants-afro-am%C3%A9ricains-%C3%A9l%C3%A9mentaires-dessinant-et-peignant-de-mani%C3%A8re-cr%C3%A9ative-ave.jpg?ver=6",
        "https://us.123rf.com/450wm/rido/rido1804/rido180400009/100140684-portrait-d-%C3%A9colier-afro-am%C3%A9ricain-s-appuyant-sur-le-bureau-avec-des-camarades-de-classe-en-arri%C3%A8re-p.jpg?ver=6",
        "https://thumbs.dreamstime.com/b/salle-de-classe-de-fille-d-%C3%A9cole-32555776.jpg",
        "https://thumbs.dreamstime.com/b/%C3%A9colier-primaire-32553695.jpg",
        "https://us.123rf.com/450wm/stockbroker/stockbroker1709/stockbroker170900440/85280519-deux-enfants-%C3%A9coutant-pendant-une-le%C3%A7on-dans-une-%C3%A9cole-primaire.jpg?ver=6"];
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


