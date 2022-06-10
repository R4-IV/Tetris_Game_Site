<?php

// Outputs the html for the header tags up until the styleshhet
//tag this is done so that page specific css files can be used 
//on their respective pages.

function outputHeader($title){
    echo '<!DOCTYPE html>';
    echo '<html>';
    echo '<head>';
    echo '<meta charset="utf-8">';
    echo '<title>' . $title . '</title>';
    echo '<link rel="stylesheet" href="/CSS/common.css">';
    echo '<link rel="SHORTCUT ICON" href="Assets/Images/favicon.ico" type="image/ico" />';
}

//Various php functions that output arrays with link and page names, used 
// in some of the for loops when outputting html.

function provideLinks(){
    $links = array("/index.php","/registration.php","/leaderboard.php");
    return $links;
}

function provideLinkNames(){
    $linkNames = array("Home","Registration","LeaderBoard");
    return $linkNames;
}

//Ascociative array used to store key value pairs used to set animation start for 
//navigation bars.
function provideAnimationMap(){
    $animationMap = array();
    $animationMap["Home"] = "startHome";
    $animationMap["Registration"] = "startRegistration";
    $animationMap["LeaderBoard"] = "startLeaderboard";
    return $animationMap; 
}

function provideDropdownAnimationMap(){
    $animationDropdownMap = array();
    $animationDropdownMap["Home"] = "homeStart";
    $animationDropdownMap["Registration"] = "regStart";
    $animationDropdownMap["LeaderBoard"] = "leadStart";
    return $animationDropdownMap; 
}

function provideFooterMap(){
    $footerMap = array();
    $footerMap[0] = array("https://www.youtube.com/" , "Assets/Images/youtube.svg" , "Youtube Logo");
    $footerMap[1] = array("https://www.facebook.com/" , "Assets/Images/facebook.svg" , "Facebook Logo");
    $footerMap[2] = array("https://www.twitter.com/" , "Assets/Images/twitter.svg" , "Twitter Logo");
    $footerMap[3] = array("https://www.instagram.com" , "Assets/Images/instagram.svg" , "Instagram Logo");
    return $footerMap;
}

//Outputs the top banner logo and nav links along with the mobile layout versions 
//that are initially hidden.

function outputNav($title){

    //variables storing arrays from outside functions at a local level

    $links = provideLinks();
    $linkNames = provideLinkNames();
    $animationMap = provideAnimationMap();
    $animationDropdownMap = provideDropdownAnimationMap();

    echo '</head>';
    echo '<body class="container">';
    echo '<div class="navBar">';
    echo '<a class="logoContainer" href="index.php"><img class="logo" src="/Assets/Images/Logo.svg" alt="Logo"></a>';
    echo '<div id="dropdownContainer">';

    //for loops output the anchor tags and the div tag for links
    //and animation classes for the mobile layout menu.

    for($i = 0; $i < count($links); $i++ ){
        echo '<div class="buttonDropdown">';
        echo '<a class="dropdownNav disableSelect "';
        echo 'href="' . $links[$i] . '">' . $linkNames[$i] . '</a>';
        echo '</div>';
    }
    echo'<div class ="dropdownAnimation ';
    for($i = 0; $i < count($linkNames); $i++){
        if($linkNames[$i] == $title){
            echo $animationDropdownMap[$title] . ' "></div>';
        }
    }

    //Creates div element that behaves as the dropdown button.

    echo '</div>';
    echo '<div id="dropdown"></div>';
    echo '<div class="links">';
    
    //for loops output the anchor tags and the div tag for links
    //and animation classes for desktop layout navigation by looping through arrays.

    for($i = 0; $i < count($links); $i++ ){
        echo '<div class="navContainer">';
        echo '<a class="nav disableSelect "';
        echo 'href="' . $links[$i] . '">' . $linkNames[$i] . '</a>';
        echo '</div>';
    }
    echo '<div class=" animation ' ;
    for($i = 0; $i < count($linkNames); $i++){
        if($linkNames[$i] == $title){
            echo $animationMap[$title] . ' "></div>';
        }
    }

    //outputs navigation bar closing div and opens background element

    echo '</div>';
    echo '</div>';
    echo '<div class="background">';
}

//Outputs HTML for the page footer.

function outputFooter(){
    echo '<div class="footer">';
    echo '<div class="spacer"></div>';

    $footerMap = provideFooterMap();

    //loads link , image source , and alt for footer social links from a 2d array.

    for($i = 0; $i < count($footerMap); $i++){
        echo '<a class="socialContainer" href=' . $footerMap[$i][0] . '><img src=' . $footerMap[$i][1] . ' alt=' . $footerMap[$i][2] . '></a>';
    }
    echo '<div class="spacer"></div>';
    echo '</div>';

    //link to javascript that creates behaviour for mobile navbar.

    echo '<script src="/Scripts/dynamicNav.js"></script>';
    echo '</body>';
    echo '</html>';
}

//makes the html for the leaderboard table on the leaderboard page.

function makeTable(){

    //creates a bounding container for the leaderboard.

    echo '<div class="leaderboard">';
    for($i = 1; $i <= 11; $i++){

        //creates  a unique class at position 11 which corresponds to player 
        //position on the leaderboard.

        if($i == 11){
            echo '<div class="leaderRow playerRow">';
            echo '<div class="position"></div>';
            echo '<div class="playerUser"></div>';
            echo '<div class="playerScore"></div>';
            echo '<div class="crown"></div>';
            echo '</div>';
        }

        //creates a row with 4 cells. 

        else{
            echo '<div class="leaderRow">';
            echo '<div class="position"></div>';
            echo '<div class="playerUser"></div>';
            echo '<div class="playerScore"></div>';
            echo '<div class="crown"></div>';
            echo '</div>';
        }
    }
    echo '</div>';
}
?>

