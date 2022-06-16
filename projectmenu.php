<?php
/* Chicken Alfredo GET */
if(isset($_GET["$chickenAQty"])) {$chickenAQty= $_GET["$chickenAQty"]; } else {$chickenAQty = ""; }

  if($chickenAQty == "a")
     { print "Chicken Alfredo $15.99"; }

/*  Spaghetti GET */
if(isset($_GET["$spaghettiQty"])) {$spaghettiQty= $_GET["$spaghettiQty"]; } else {$spaghettiQty = ""; }       
	
    if($spaghettiQty == "b")
	     { print "Spaghetti  $12.50"; }

/*  Lasagna GET */
if(isset($_GET["$lasagnaQty"])) {$lasagnaQty= $_GET["$lasagnaQty"]; } else {$lasagnaQty = ""; }

		
    if($lasagnaQty == "c")
       { print "Lasagna $14.99"; }

/*  Salad GET */
if(isset($_GET["$saladQty"])) {$saladQty= $_GET["$saladQty"]; } else {$saladQty = ""; }
	
     if($saladQty == "d")  
		   { print "House Salad $8.99"; }

/*  Homemade Soup GET */
if(isset($_GET["$soupQty"])) {$soupQty= $_GET["$soupQty"]; } else {$soupQty = ""; }	

    if($soupQty == "e")
      { print "Homemade Soup $5.00"; 
 
       
/*  Grilled Salmon GET */
if(isset($_GET["$salmonQty"])) {$salmonQty= $_GET["$salmonQty"]; } else {$salmonQty = ""; }	
       	
    if($salmonQty == "f")
      { print "Grilled Salmon $24.99"; }

/*  Stuffed Shells GET */
if(isset($_GET["$shellsQty"])) {$shellsQty= $_GET["$shellsQty"]; } else {$shellsQty= ""; }	       
           
    if($shellsQty == "g")
      { print "Stuffed Shells $10.50"; }
		
 
/*  Five Cheese Ziti GET */
if(isset($_GET["$zitiQty"])) {$zitiQty= $_GET["$zitiQty"]; } else {$zitiQty= ""; }	             
    if($zitiQty == "h")
      { print "Five Chesse Ziti $12.50"; }
       
       
 /*  Shrimp Scampi GET */
if(isset($_GET["$scampiQty"])) {$scampiQty= $_GET["$scampiQty"]; } else {$scampiQty= ""; }	      
              
    if($scampiQty == "i")
      { print "Shrimp Scampi $25.50"; }
?>
  

