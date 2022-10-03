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
