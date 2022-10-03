//----------------------------------Sous menu----------------------------------------

/* Lorsque l'utilisateur clique sur le bouton,
basculer entre le masquage et l'affichage du contenu de la liste déroulante */
function maFonction1(){
  document.getElementById("sous_menu1").classList.toggle("change");
}

//Fermez le menu déroulant si l'utilisateur clique en dehors de celui-ci
window.onclick = function(e) {
  if (!e.target.matches('.mybutton')) {
    var sousOnglets = document.getElementsByClassName("sous_onglet");
    for (var i = 0; i < sousOnglets.length; i++) {
      var afficher = sousOnglets[i];
      if (afficher.classList.contains('change')) {
        afficher.classList.remove('change');
      }
    }
  }
}

var imageSlides = ["images/image1.jpeg", "images/téléchargement1.jpeg", "images/téléchargement.jpeg", "images/téléchargement2.jpeg"];
  var time = 3000;
  var i = 0;

  function changeImg(){
    document.slide.src = imageSlides[i];

    if(i < imageSlides.length - 1){
      i++;
    }else{
      i = 0;
    }
    setTimeout("changeImg()" , time);
  }
  //EXecute la fonction lorsque la page se charge
  window.onload = changeImg;
