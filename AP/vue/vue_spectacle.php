<html>
<body>
	
<center>
<BR/> <h1>Les Spectacles</h1><BR/>      
	                  
<?php
	  //affichage des spectacles
	  foreach($lesSpectacles as $unSpectacle)
	  {

		$widSpec=$unSpectacle['idSpectacle'];
		$wintitSpec=$unSpectacle['intitSpectacle'];
		$wpseudoArtiste = $unSpectacle['pseudoArtiste'];
		$wlibPublic = $unSpectacle['libPublic'];
		
		$wphotoSpec= "vue/image/ImageSpectacle/".$unSpectacle['photoSpectacle']."";
		echo "<A href='index.php?section=detailSpectacle&choixId=$widSpec'><div class='spec'><h3>$wintitSpec<br>
						 Par $wpseudoArtiste<br>
						 Public : $wlibPublic
						 </h3></div>";

		echo"<img src='$wphotoSpec' style='width : 650px;'><br><br><br></a>";	
	  }
	  ?>	
</center>

</body>
</html>   