var slider_content = document.getElementById('slider_box');
  var image = ['anniversaire.png','cubetto.jpg','atelier.jpg'];
  var i = image.length;

  function nextImage(){
    if (i < image.length){
      i += 1;
    }
    else{
      i = 1;
    }
    slider_content.innerHTML = "<img src =../images/" + image[i-1] + ">";
  }

  function preImage(){
    if (i < image.length+1 && i>1){
      i -= 1;
    }
    else{
      i = 1;
    }
    slider_content.innerHTML = "<img src =../images/" + image[i-1] + ">";
  }

  setInterval(nextImage , 4000);
