<?php
    include_once 'vue/vue_header.php';   
?>

  <link rel="stylesheet" href="vue/css/caroussel.css">
  <div class="content">
    <center>
      <div class="card_desc">
          <h2>
            Le Mans : avec «Art-A-Dom», les artistes sont livrés sur un plateau à domicile!
          </h2><br>

          <h4><i>
            Suite aux confinements, un collectif d’artistes s’est réuni pour continuer à promouvoir la culture et à se produire face à un public... virtuel!
          </i></h4>
          <br>
          <h5>
              Le monde de la culture est dans une mauvaise passe à cause de la crise sanitaire.
              Le collectif Art-A-Dom se mobilise pour permettre aux artistes de se produire à la demande.
              Chant, musique mais aussi magie ou bien encore du rire...
              Les artistes viennent chez vous, à domicile ou dans la rue selon votre souhait!
              Une initiative du collectif Art-A-Dom. Concrètement, il est possible de réserver uneprestation à domicile à condition d’habiter dans lepérimètre du Mans (Sarthe)et des communes limitrophes.
              Sinon des prestations en ligne sont possibles (prendre contact directement avec les artistes).
          </h6>
      </div>

    <div class="row" id="row_acc">
        <h1>Mises en avant</h1>
        <?php
        if (isset($spectacles)){
            foreach ($spectacles as $spec){
                $intitSpectacle = $spec['intitSpectacle'];
                $photoSpectacle = $spec['photoSpectacle'];
                $pseudoArtiste = $spec['pseudoArtiste'];
                $descSpectacle = $spec['descSpectacle'];

                echo "
        <div class='col-4 card text-white card_spec'>
            <img class='card-img' src = 'vue/image/imageSpectacle/$photoSpectacle'>
            <div class='card-img-overlay'>
                <h5 class='card-title'>$intitSpectacle</h5>
                <p class='card-text'>$descSpectacle</p>
            </div>
        </div>
                ";
            }
        };

        ?>
    </div>
  </div>
  </center>

<?php
    include_once 'vue/vue_footer.php';
?>
