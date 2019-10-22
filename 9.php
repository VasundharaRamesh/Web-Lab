<?php
$allTheStates = "Mississippi Alabama Texas Massachusetts Kansas";
$statesArray = [];
$states1 = explode(' ',$allTheStates);
$i = 0;

foreach ($states1 as $states)
{
	if (preg_match('/xas$/',($states)))
		{
		 $statesArray[$i] = ($states);
		 $i=$i+1;
		 print "\n The states that end in xas: ".$states;
			
		}
} 


foreach ($states1 as $states)
{
	if (preg_match('/^k.*s$/i',($states)))
		{
		 $statesArray[$i] = ($states);
		 $i=$i+1;
		 echo "<br> The states that start with k and ends in s: ".$states;
		
		}
} 


foreach ($states1 as $states)
{
	if (preg_match('/^M.*s$/',($states)))
		{
		 $statesArray[$i] = ($states);
		 $i=$i+1;
		 echo "<br>The states that start with M and ends in s: ".$states;

		}
} 


foreach ($states1 as $states)
{
	if (preg_match('/a$/',($states)))
		{
		 $statesArray[$i] = ($states);
		 $i=$i+1;
		 echo "<br> The states that end in a: ".$states;

		}
} 


foreach ($statesArray as $element => $value)
{
	print "<br>" .$value. "is the element: " .$element;
}

?>
