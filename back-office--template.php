<?php

  @date_default_timezone_set("Europe/Paris"); // fuseau horaire
  @setlocale(LC_TIME, "fr_FR.utf8","fra"); // jours et mois en français
  $dateDuJour = strftime("%A %d %B %Y");
  $product = file_get_contents("conf/products.json");
  $productArray = json_decode($product, JSON_OBJECT_AS_ARRAY);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>wax-addict — boutique officielle</title>
  <meta name="description" content="Bienvenue dans la boutique privée “Wax-Addict”. Retrouvez notre toute dernière sélection de tissus africains hauts de gamme.">
  <link rel="stylesheet" href="assets/style.css">
</head>

<body class="back-office">
  <header><h2>wax-addict</h2></header>
  <main>
    <h2>Bienvenue dans votre espace privé</h2>
    <p>Voici les produits disponibles en ce <?php echo $dateDuJour; ?> :</p>
    <?php
    foreach($productArray as $key => $value){
      echo "<div id='conteneur'>"
          . "<img id='image' src=' ". $value['image'] ." ' alt='Image de la plante'>"
          . "<ul>"
          . "<li>Nom: " . $value['nom'] . "</li>"
          . "<li>Longueur: " . $value['longueur'] . "</li>"
          . "<li>Prix: " . $value['prix'] . "</li>"
          . "<li>Nom alternatif: " . $value['nom alternatif'] . "</li>"
          . "</ul>"
          . "<br>"
          . "</div>";
    }
    ?>
  </main>
  <footer><a href="logout.php">déconnexion</a></footer>
</body>

</html>
