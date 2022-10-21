<html>
<body>
	
<center>
	                  
<?php
	  //affichage des spectacles

    
    echo "<BR/> <h1>Les Spectacles de ".$artiste['pseudoArtiste']."</h1><BR/>";


	  foreach($lesSpectacles as $unSpectacle)
	  {	
		  $wintitSpec=$unSpectacle['intitSpectacle'];
		  $wpseudoArtiste = $unSpectacle['pseudoArtiste'];
		  $wlibPublic = $unSpectacle['libPublic'];
		  $wphotoSpec= "vue/image/ImageSpectacle/".$unSpectacle['photoSpectacle']."";

		  echo "<div class='spec'><h3>$wintitSpec<br>
								 Public : $wlibPublic
								 </h3></div>";
		  
		  echo"<img src='$wphotoSpec'><br><br><br>";				
	  }
	  ?>	
</center>

</body>


</html> 