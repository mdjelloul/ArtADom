<?php

echo "<div class='artiste'>";
    
    echo '<div class="row">';

    echo '<img calss="imgartiste" src="vue/image/imgArtiste/'.$artiste['imageArtiste'].'" alt="">';
    echo '<div class="desc"><b>'.$artiste['pseudoArtiste'].'</b> </div>';
    echo '<div class="descript"> '.$artiste['descArtiste'].' </div>';
    echo '</div>';
    echo '<div class="contact">';
    echo '<center>';
    echo '<button><a href="index.php?section=spectacleArtiste&id='.$artiste['idArtiste'].'">Voir ses spectacles</a></button>';
    echo "<p> <b> Contact : </b>";
    echo $artiste['mailArtiste']." </p>";
    echo '</center>';

    echo '</div>';

echo "</div>";

?>
