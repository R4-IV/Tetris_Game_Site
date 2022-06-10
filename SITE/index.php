<?php
include('common.php');
outputHeader("Home");
?>
<!-- Link to home specific style sheet -->
<link rel="stylesheet" href="/CSS/home.css">
<?php
outputNav("Home");
?>
<div class="content">
    <!-- Creates the html for the game container and the canvas -->
    <div class ="game">
        <div class="tetrisGameContainer">
            <canvas id="tetrisCanvas"></canvas>
        </div>
    </div>
    <!-- Creates the html element containing login and how to play panes -->
    <div class ="sideBoxes">
        <!-- Creates html for login pane elements -->
        <div id="login">
            <div id="loginText">LOGIN</div>
            <form class="loginForm">
            <input type="text" id="Username" name="username" placeholder="Username/Email">
            <input type="password" id="Password" name="password" placeholder="Password">
            <input type="submit" id="submit" value="Login">
            </form>
            <a id="regLink" href="registration.php">Don't have an account? Register here</a>
        </div>
        <!-- Creates html for how to play pane element-->
        <div id="howToPlay">
            <div id="howToPlayText">HOW TO PLAY</div>
            <div class="slideshowContainer">
                <img id="slideshow" src=""  alt="slides"></img>
                <div id="slideDots"></div>
                <div class="slideNav">
                    <div class="arrowContainer" id="leftArrow">
                    </div>    
                    <div id="slideNavSpacer"></div>
                    <div class="arrowContainer" id="rightArrow">
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- closing tag for content class -->
</div>
<!-- scripts for slideshow and game behaviour -->
<script src="/Scripts/slideshow.js"></script>
<script src="/Scripts/game.js"></script>
<?php
outputFooter();
?>