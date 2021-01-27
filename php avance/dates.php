<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les dates et les heures.</title>
</head>
<body>
<article>Exercice 1</article>
<p>Affichez la date du jour au format mardi 2 juillet 2019.</p>
<?php
date_default_timezone_set("Europe/Paris");
echo date("l d F Y");
?><br><br>
<article>Exercice 2</article>
<p>Trouvez le numéro de semaine de la date suivante : 14/07/2019.</p>
<?php
echo date('W', mktime(0,0,0,7,14,2019))." eme semaine.";
?><br><br>
<article>Exercice 3</article>
<p>Combien reste-t-il de jours avant la fin de votre formation.</p>
<?php
$resteS = mktime(12,0,0,5,7,2021) - time();
$resteJ = round((($resteS/60)/60)/24);
echo "Il reste $resteJ jours.";
?><br><br>



</body>
</html>