 <?php
//1.if disible by 4 & 100 & 400 = leap year
//2.if disible by 4 & 100 = Not Leap year
//3.if disible by 4 but not disible by 100 = Leap year
//4.if disible by 4 = Leap year
 $year = 2000;
 if($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0){
    echo "{$year} is a leap year";
 }else if($year % 4 == 0 && $year % 100 == 0){
    echo "{$year} is a not leap year";
 }else if($year % 4 == 0){
    echo "{$year} is a leap year";
 }else{
    echo "{$year} is not a leap year";
 }