<?php

// Example 1
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
"Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
"Finland"=>"Helsinki", "France" => "Paris",
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
"Germany" => "Berlin", "Greece" => "Athens",
"Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
"Portugal"=>"Lisbon", "Spain"=>"Madrid",
"Sweden"=>"Stockholm", "United Kingdom"=>"London",
"Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
"Czech Republic"=>"Prague", "Estonia"=>"Tallin",
"Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta",
"Austria" => "Vienna", "Poland"=>"Warsaw") ;

// Sort the associative array by city
asort($ceu) ;

// Loop through and output each country with its capital
foreach($ceu as $country => $capital)
{
echo "The capital of $country is $capital"."\n" . "<br>" ;
}

// EXAMPLE 2

echo "Associative array : Ascending order sort by value";

$array2=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); 

asort($array2);

foreach($array2 as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."
";
}

echo "Associative array : Ascending order sort by Key";

$array3=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); 
ksort($array3);

foreach($array3 as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."
";
}

echo "Associative array : Descending order sorting by Value";

$age=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

arsort($age);

foreach($age as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."
";
}

echo "Associative array : Descending order sorting by Key";

$array4=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); 
krsort($array4);

foreach($array4 as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."
";
}
