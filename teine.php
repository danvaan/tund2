<?php


   $age = 5;
   
   if ($age < 18) {
	   
	   echo "alaealine";
	   
   } else {
	   
	   echo "täisealine";
   }




?>

<br>

<?php

	// kommentaarid for (1,2,3 {
	//SISU
	//1 kord kõige alguses
	//2 enne sisu iga kord
	//3 peale sisu iga kord


//i=5
//0<5
//SISU
//i=0+1=1
//SISU
//i<5
//i=1+1=2
//SISU
//i=2+1=3
//3<5
//SISU
	
		for ($i = 0; $i < $age; $i = $i+1) {
			echo ($i)."palju ";
			
		}
		echo "õnne";
?>
