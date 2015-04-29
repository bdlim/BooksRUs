/*CAROUSEL.JS*/

var imageArray = new Array(3);
for (i = 0; i < imageArray.length; i++) {
  imageArray[i] = "img/carousel/carousel" + (i+1) + ".jpg"
}

var imageCounter = 0;
function rotate () {
  var imageObject = document.getElementById("carousel");
  imageObject.src = imageArray[imageCounter];
  ++imageCounter;
  if (imageCounter == imageArray.length) {
    imageCounter = 0;
  }
}

function startRotation () {
  document.getElementById("carousel").src = imageArray[imageArray.length-1];
  setInterval("rotate()", 7000);
}
