var indexValue = 0;
function slideShow(){
    var x;
    const img = document.getElementsByClassName("isian");
    for(x = 0; x < img.length; x++){
        img[x].style.display = "none";
    }
    indexValue++;
    if(indexValue > img.length){indexValue = 1}
    img[indexValue -1].style.display = "block"; 
}
slideShow();

var slideIndex = 1;
    showSlide(slideIndex);

function nextslide(n){
    showSlide(slideIndex += n);
}

function dotslide(n){
    showSlide(slideIndex = n);
}

function showSlide(n) {
    var i;
    var slides = document.getElementsByClassName("isian");
    var dot = document.getElementsByClassName("dot");
    
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
        
        slides[i].style.display = "none";
    }

    for (i = 0; i < slides.length; i++) {
        
        dot[i].className = dot[i].className.replace(" active", "");
    }

    slides[slideIndex - 1].style.display = "block";

    dot[slideIndex - 1].className += " active";
    


}

var today = new Date();
    const latar = document.getElementsByClassName('latar')[0];
var currentHour = today.getHours();
if (currentHour >= 6 && currentHour < 18) { /* pagi hari */
  latar.style.backgroundImage = "url('/asset/wallmorning.jpg')";
} else { /* malam hari */
  latar.style.backgroundImage = "url('/asset/wallpaper.jpg')";
}

AIzaSyAMSaaYAOFbVLcGkY61CwmjdvKCLQkSZso //API youtube