<?php
include 'controleur/detailSpec.php'; 

?>
 
<html>
<body> 
	<?php

$widSpec = $lesSpectacles['idSpectacle'];
$wintitSpec= $lesSpectacles['intitSpectacle'];
$wpseudoArtiste = $lesSpectacles['pseudoArtiste'];
$wlibPublic = $lesSpectacles['libPublic'];
$wtarifSpec = $lesSpectacles['tarifSpectacle'];
$wdescSpec = $lesSpectacles['descSpectacle'];
$wdureeSpec = $lesSpectacles['dureeSpectacle'];
$wphotoSpec= "vue/image/ImageSpectacle/".$lesSpectacles['photoSpectacle']."";
	?>

	<div class="container  mb-5 ">
		<div class="row">
              <div class="spectacle">
					<?php
					echo "<H1>$wintitSpec</H1><BR> $wpseudoArtiste<br>$wlibPublic";
					?>
				</div>
		</div>


		<div class="row">

			<div class="image">

				<?php
					echo"<img src='$wphotoSpec' style='width:650px;'>";
				?>
			</div>

			<div class="info">
				<?php
					echo "$wdescSpec<BR/>"; 
					echo "$wtarifSpec<BR/>";
                    echo "$wdureeSpec<BR/>";	

				?>
			</div>
		
		</div>

	</div>		
	
</body>

</html>