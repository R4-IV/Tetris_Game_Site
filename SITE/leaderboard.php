<?php
include('common.php');
outputHeader("LeaderBoard");
?>
<!-- style sheet specific to leaderboard page -->
<link rel="stylesheet" href="/CSS/leaderboard.css">
<?php
outputNav("LeaderBoard");
?>
<div class="content">
    <!-- div containing all elements on leaderboard page -->
    <div class="leaderPage">
        <!-- Leaderboard title text -->
        <div id="leaderText">LEADERBOARD</div>
        <!--  div containing the navigation tabs for traversing between score level and time -->
        <div id="tabBar">
            <!-- div creates the html for the gray rail the links sit on -->
            <div class="tabSubBar">
                <div class="tabs">SCORE</div>
                <div class="tabs">LEVEL</div>
                <div class="tabs">TIME</div>
                <!-- animation class responsible for animating containing the starting position of the overlay element -->
                <div id="animationID" class ="animationLeader startScore"></div>
            </div>
        </div>
    <div>
</div>
<!-- calls function from common that outputs the html for the leaderboard table  -->
<?php
makeTable();
?>
<!-- script for leaderboard and animation start update behaviour -->
<script src="/Scripts/leaderboard.js"></script>
<?php
outputFooter();
?>