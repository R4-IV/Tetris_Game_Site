// Creates a static 2d array used to store player names and their scores in each category.

var scoreArr = [[],[]];
scoreArr[0] = new Array("PickleRick" , "65000" , "25:34" , "12" )
scoreArr[1] = new Array("Cayde7" , "64700" , "25:30" , "12")
scoreArr[2] = new Array("Opiece0" , "63250" , "24:04", "11")
scoreArr[3] = new Array("ExplosiveW" , "63100" , "22:50", "10")
scoreArr[4] = new Array("Env0y" , "62700" , "21:00", "10")
scoreArr[5] = new Array("Merc1ful" , "60950" , "20:17", "9")
scoreArr[6] = new Array("John14" , "59500" , "20:15", "8")
scoreArr[7] = new Array("Waffles" , "58600" , "17:49", "8")
scoreArr[8] = new Array("theRealR4" , "57000" , "13:41", "6")
scoreArr[9] = new Array("Dread" , "57000" , "12:05", "5")
scoreArr[10] = new Array("Arundel" , "48000" , "10:35", "5")
scoreArr[11] = new Array("TetrisPro" , "45000" , "10:08", "5")
scoreArr[12] = new Array("Drifter31" , "42000" , "10:07", "4")

//Current player and current mode corresponding to the selectedd score tab.

var currentPlayer = "Drifter31";
var mode = 1;

//function uses scoreArray to populate all fields in the table including applying the unique class to
//the player position.

function populateBoard(){
    var rows = document.getElementsByClassName("leaderRow");
    var position = document.getElementsByClassName("position");
    var playerUser = document.getElementsByClassName("playerUser");
    var playerScore = document.getElementsByClassName("playerScore");

    for(i = 0; i < rows.length; i++){
        if(i == rows.length-1){
            loopVar = 0;
            while(scoreArr[loopVar][0] != currentPlayer){
                loopVar++;
            }
            position[i].innerHTML = loopVar+1;
            playerUser[i].innerHTML = scoreArr[loopVar][0];
            playerScore[i].innerHTML = scoreArr[loopVar][mode];
        }
        else{
            position[i].innerHTML = i+1;
            playerUser[i].innerHTML = scoreArr[i][0];
            playerScore[i].innerHTML = scoreArr[i][mode];
        }
    }
}

//event listeners added for each tab of the score selector then populating the value fileds based on the available tab.

document.getElementsByClassName("tabs")[0].addEventListener("click" , function(){
    mode = 1;
    var animation = document.getElementById("animationID");
    animation.classList.remove("startLevel");
    animation.classList.remove("startTime");
    animation.classList.add("startScore");
    populateBoard();
})
document.getElementsByClassName("tabs")[1].addEventListener("click" , function(){
    mode = 3;
    var animation = document.getElementById("animationID");
    animation.classList.remove("startSscore");
    animation.classList.remove("startTime");
    animation.classList.add("startLevel");
    populateBoard();
})
document.getElementsByClassName("tabs")[2].addEventListener("click" , function(){
    mode = 2;
    var animation = document.getElementById("animationID");
    animation.classList.remove("startLevel");
    animation.classList.remove("startScore");
    animation.classList.add("startTime");
    populateBoard();
})

//on initial load will populate the leaderboard 

window.onload = populateBoard();