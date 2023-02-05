<?php
$fee = 18500;    //User's input

$twenty_five_percent = $fee * 25 / 100;  //Total of 25 parcent commission 
$twenty_percent = $fee * 20 / 100;      //Total of 20 parcent commission 
$fifteen_percent = $fee * 15 / 100;     //Total of 15 parcent commission 
$invalid = "Invalid";                  //If tution fee is less than 7000

//Logic
$commission = ($fee >= 20000) ? ($twenty_five_percent) : (($fee > 10000 && $fee < 20000) ? ($twenty_percent) : (($fee < 10000 && $fee > 7000) ? ($fifteen_percent) : $invalid));

echo $commission;
