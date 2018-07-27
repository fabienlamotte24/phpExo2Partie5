<?php
/*Création du tableau avec les douze mois en Anglais*/
  $months = array ('January','February','march','april','may','june','july','august','september','october','november','december');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 1</title>
  </head>
  <body>
    <p>
      <?php //Affichage de la troisieme valeur du tableau
      //2 est la troisieme valeur car on pars de 0 sur le tableau
        echo $months(2);
      ?>
    </p>
  </body>
</html>
