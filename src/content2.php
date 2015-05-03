<?php

session_start();
if($_GET['correctLogin'] != true){ 
    header("Location: http://web.engr.oregonstate.edu/~catesia/assignment4/login.php"); 
    $_SESSION = array();
    session_destroy();
}

echo "<br>Click <a href='http://web.engr.oregonstate.edu/~catesia/assignment4/content1.php'>here</a> to return to Content 1.";
?>