<?php
/* Chicken Alfredo GET */
if(isset($_GET["chickenAQty"])) {$chickenAQty= $_GET["chickenAQty"]; } else {$chickenAQty = ""; }

  if($chickenAQty > 0)
      { print " Chicken Alfredo  $15.99 x " . $chickenAQty . "$" . (15.99*$chickenAQty); }



/*  Spaghetti GET */
 if(isset($_GET["spaghettiQty"])) {$spaghettiQty= $_GET["spaghettiQty"]; } else {$spaghettiQty = ""; }          
	
    if($spaghettiQty > 0)
      { print " Spaghetti  $12.50 x " . $spaghettiQty . "$" . (12.5*$spaghettiQty); }



/*  Lasagna GET */
if(isset($_GET["lasagnaQty"])) {$lasagnaQty= $_GET["lasagnaQty"]; } else {$lasagnaQty = ""; }

    if($lasagnaQty > 0)
      { print " Lasagna  $14.99 x " . $lasagnaQty . "$" . (14.99*$lasagnaQty); }



/*  Salad GET */
if(isset($_GET["saladQty"])) {$saladQty= $_GET["saladQty"]; } else {$saladQty = ""; }
	
     if($saladQty > 0)
      { print " House Salad  $8.99 x " . $saladQty . "$" . (8.99*$saladQty); }



/*  Homemade Soup GET */
if(isset($_GET["soupQty"])) {$soupQty= $_GET["soupQty"]; } else {$soupQty = ""; }	

    if($soupQty > 0)
      { print " House Salad  $5.00 x " . $soupQty . "$" . (5.00*$soupQty); }
 
       

/*  Grilled Salmon GET */
if(isset($_GET["salmonQty"])) {$salmonQty= $_GET["salmonQty"]; } else {$salmonQty = ""; }	
       	
    if($salmonQty > 0)
      { print " House Salad  $24.99 x " . $salmonQty . "$" . (24.99*$salmonQty); }



/*  Stuffed Shells GET */
if(isset($_GET["shellsQty"])) {$shellsQty= $_GET["shellsQty"]; } else {$shellsQty= ""; }	       
           
    if($shellsQty > 0)
      { print " Stuffed Shells  $10.50 x " . $shellsQty . "$" . (10.50*$shellsQty); }
		
 

/*  Five Cheese Ziti GET */
if(isset($_GET["zitiQty"])) {$zitiQty= $_GET["zitiQty"]; } else {$zitiQty= ""; }	             
    if($zitiQty == "h")
      
    if($zitiQty > 0)
      { print " Five Cheese Ziti  $12.50 x " . $zitiQty . "$" . (12.50*$zitiQty); }
		
       
       
 /*  Shrimp Scampi GET */
if(isset($_GET["scampiQty"])) {$scampiQty= $_GET["scampiQty"]; } else {$scampiQty= ""; }	      
              
    if($scampiQty > 0)
      { print " Shrimp Scampi  $25.50 x " . $scampiQty . "$" . (25.50*$scampiQty); }
		
  ?>
