<?php

$minMultiplicand = intval($_GET['min-multiplicand']);
$maxMultiplicand = intval($_GET['max-multiplicand']);
$minMultiplier = intval($_GET['min-multiplier']);
$maxMultiplier = intval($_GET['max-multiplier']);

$validInput = true;
if($_GET['min-multiplier'] == null) {
    echo "<br> Missing parameter min-multiplier";   
    $validInput = false;
}

if($_GET['max-multiplier'] == null) {
    echo "<br> Missing parameter max-multiplier";  
    $validInput = false;
}

if($_GET['min-multiplicand'] == null) {
    echo "<br> Missing parameter min-multiplicand";  
    $validInput = false;
}

if($_GET['max-multiplicand'] == null) {
    echo "<br> Missing parameter max-multiplicand";
    $validInput = false;
}
//Check if int
if(!is_int($minMultiplier)) {
    echo "<br> min-multiplier is not an integer";   
    $validInput = false;
}

if(!is_int($maxMultiplier)) {
    echo "<br> max-multiplier is not an integer";   
    $validInput = false;
}

if(!is_int($minMultiplicand)) {
    echo "<br> min-multiplicand is not an integer";   
    $validInput = false;
}

if(!is_int($maxMultiplicand)) {
    echo "<br> max-multiplicand is not an integer";   
    $validInput = false;
}



if($validInput) {
    if($minMultiplicand > $maxMultiplicand) {
        echo "Minimum multiplicand larger than max";
        $validInput = false;
    }
    if($minMultiplier > $maxMultiplier) {
        echo "Minimum multiplier larger than max";
        $validInput = false;
    }
    
}


if($validInput){
    //mess with this
    echo "<table border='2' >"; 
    echo "<tr>"; 
    echo "<td></td>"; 
    
    for($i = $minMultiplier; $i <= $maxMultiplier; $i++){ 
    echo "<th>$i</th>";
    }   
    for($i = $minMultiplicand; $i <= $maxMultiplicand; $i++){ 
    echo "<tr>";
    echo "<th>$i</th>"; 
    for($j = $minMultiplier; $j <= $maxMultiplier; $j++){ 
        echo "<td>" . $i * $j . "</td>";
    }
    echo "</tr>"; 
}
    
}



?>