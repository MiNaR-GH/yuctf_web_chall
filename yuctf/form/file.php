<?php
echo "try here its a hint broo " ; 
   $file = $_GET['file'];
   $file = str_replace( array( "http://", "https://" ), "", $file );
   $file = str_replace( array( "../", "..\"" ), "", $file );

   if(isset($file))
   {
       include("$file");
   }
   else
   {
       include("index2.html");
   }
?>
