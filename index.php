<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Partie4_Exercice 6</title>
</head>
<!-- Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne. Elle doit renvoyer une chaine de la forme :
"Bonjour" + nom + prénom + ",tu as" + age + "ans". -->
<body>
<?php
function contactInformation($lastName = 'BOWER', $firstName = 'Jane', $age = 40){
  return 'Bonjour'. ' '. $lastName .' '. $firstName .' '. 'tu as'.' '. $age .' '.'ans.';
}
  echo contactInformation ();
?>
</body>
</html>
