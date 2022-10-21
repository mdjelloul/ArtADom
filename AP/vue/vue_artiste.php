<?php

echo "<h1 style='text-align:center'>Les Artistes</h1>";
echo "<div class='artiste'>";
foreach ($artistes as $artiste) {
    
    echo '<a class="detailart" href="index.php?section=dartiste&id='.$artiste['idArtiste'].'"><div class="row">';

    echo '<img calss="imgartiste" src="vue/image/imgArtiste/'.$artiste['imageArtiste'].'" alt="">';
    echo '<div class="desc"><b>'.$artiste['pseudoArtiste'].'</b> <br> </div>';
    echo '<div class="descript"> '.$artiste['descArtiste'].' </div>';
    echo '</div></a>';
}

echo "</div>";

?>