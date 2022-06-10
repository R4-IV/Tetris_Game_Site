// Stores variables for canvas drawing context and user screen pixel ratio.

let canvas = document.getElementById('tetrisCanvas');
let ctx = canvas.getContext('2d');
let dpi = window.devicePixelRatio;

// function fixes blurry canvas by multiplying canvas size by pixel ratio.

function fixResolution(){
    let styleHeight = +getComputedStyle(canvas).getPropertyValue("height").slice(0 , -2);
    let styleWidth = +getComputedStyle(canvas).getPropertyValue("width").slice(0 , -2);
    canvas.setAttribute('height' , styleHeight * dpi);
    canvas.setAttribute('width' , styleWidth * dpi);
}

// draw function outputs the Word Game to the screen.

function drawText(){
    ctx.font = '50px serif';
    ctx.fillStyle = "white";
    ctx.fillText('GAME', (canvas.width/2 -70), (canvas.height/2 - 12) , 140);
}

// on screen reload calls the fix resolution and draw function.

window.onload = fixResolution() , drawText();

// on screen resize calls the fix resolution and draw function.

window.addEventListener("resize" , function(){
    fixResolution();
    drawText();
})

