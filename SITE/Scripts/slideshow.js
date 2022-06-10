// variables used to store iterator images array and a string accumulator

var i = 0;
var images = [];
var dots = "";
images[0] = '/Assets/Images/neon-blue.jpg';
images[1] = '/Assets/Images/neon-green.png';
images[2] = '/Assets/Images/neon-pink.png';
images[3] = '/Assets/Images/neon-red.png';
images[4] = '/Assets/Images/neon-purple.jpg';

//sets the image style for the slideshow to fill the containing div

document.getElementById('slideshow').style.height = "100%";
document.getElementById('slideshow').style.width = "100%";

//Creates the html for the dots displaying the currrent active image 

function makeDots(){
    dots += "<div class=\"dotSpacer\"></div>";
    for(a = 0; a < images.length; a++){
        if(a == i){
            dots += "<div class=\" dot activeDot\"></div>"
        }
        else{
            dots += "<div class=\" dot \"></div>"
        }
    }
    dots += "<div class=\"dotSpacer\"></div>";
    document.getElementById('slideDots').innerHTML = dots;
    dots = "";
}

//functions that allow traversal of the array via iterator in the left or right on 
//the slideshow navigation 

function moveLeft(){
    if(i > 0){
        i--;
    }
    else {
        i = images.length-1;
    }
}
function moveRight(){
    if(i < images.length -1){
        i++;
    }
    else {
        i = 0;
    }
}

//function that changes the current image based on the value of i and updates the displayed dots 
//to reflect the change 

function changeImage(){
    document.getElementById('slideshow').src = images[i];
    makeDots();
}

// event listeners for left and right arrow elements 
document.getElementById("rightArrow").addEventListener("click" , function(){
    moveRight();
    changeImage();
})
document.getElementById("leftArrow").addEventListener("click" , function(){
    moveLeft();
    changeImage();
})
 // on screen load create dots and load initial image into the src of the image tags 
window.onload = makeDots();
window.onload = changeImage();
