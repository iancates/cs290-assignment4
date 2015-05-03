<?php
session_start();

if(!isset($_SESSION['correctLogin'])){ 
    if(empty($_POST)){ 
        header("Location: http://web.engr.oregonstate.edu/~catesia/assignment4/login.php"); 
        
        session_destroy();
    } 
    
    else{  
        $_SESSION['correctLogin'] = true; 
        
    }
}
if($_SESSION['correctLogin'] == true){
    if($_GET['logout'] == true) {
        header("Location: http://web.engr.oregonstate.edu/~catesia/assignment4/login.php");

        session_destroy();   
    }
    if($_POST['username'] == null || $_POST['username'] == '' ) {
        echo "<br>A username must be entered";
        echo "<br>Click <a href='login.php'>here</a> to return to the login screen.";   
    }
    else {
        $_SESSION['userName'] = $_POST['username'];
        $userName = $_SESSION['userName'];
        if(!isset($_SESSION['numOfVisits'])) {
            $_SESSION['numOfVisits'] = 0;   
            echo "Hello " . $userName . " you have visited this page " . $_SESSION['numOfVisits'] . " times before. "; 
            echo "<br>Click <a href='/~catesia/assignment4/content1.php?logout=true'>here</a> to logout.";
            echo "<br>Click <a href= 'http://web.engr.oregonstate.edu/~catesia/assignment4/content2.php?correctLogin=true'>here</a> to visit Content 2.";
        }
        else {
            $_SESSION['numOfVisits'] = $_SESSION['numOfVisits'] + 1 ;  
            echo "Hello " . $userName . " you have visited this page " . $_SESSION['numOfVisits'] . " times before. "; 
            echo "<br>Click <a href='/~catesia/assignment4/content1.php?logout=true'>here</a> to logout.";
            echo "<br>Click <a href= 'http://web.engr.oregonstate.edu/~catesia/assignment4/content2.php?correctLogin=true'>here</a> to visit Content 2.";
            //http://web.engr.oregonstate.edu/~catesia/assignment4/content1.php?logout=true
        }
    }
    function log_out() {
        echo 'test';
        session_destroy(); 
        return;

    }
}
//echo $_SESSION['numOfVisits'];

?>