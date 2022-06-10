//variable tracks whether the dropdown div has been clicked or not 

var click = 0;

//event listener that listens for clicks on dropdown div and applies the correct
//styling to elements based on whether the click is 0 or 1.

document.getElementById("dropdown").addEventListener("click" , function(){
    if(click == 0){
        click = 1;
        document.getElementById("dropdownContainer").style.display = "flex";
        document.getElementsByClassName("logoContainer")[0].style.marginBottom = "30px";
    }
    else if(click == 1){
        click = 0;
        document.getElementById("dropdownContainer").style.display = "none";
        document.getElementsByClassName("logoContainer")[0].style.marginBottom = "0px";
    }});

//event listener for resize used to reset styles and click value if the window is resized
//past the mobile layout limit while dropdown menu is active.

window.addEventListener("resize" , function(){
    if(document.body.parentNode.clientWidth >= 602){
        click = 0;
        document.getElementById("dropdownContainer").style.display = "none";
        document.getElementsByClassName("logoContainer")[0].style.marginBottom = "0px";
    }
})