<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Champs à valeur multiples</title>
</head>
<body>
<form action="script.php" method="post"> 
   Tu utilises internet plutôt le :<br> 
   <input type="checkbox" name="Fjour[]" value="Lundi">Lundi<br>
   <input type="checkbox" name="Fjour[]" value="Mardi">Mardi<br>
   <input type="checkbox" name="Fjour[]" value="Mercredi">Mercredi<br>
   <input type="checkbox" name="Fjour[]" value="Jeudi">Jeudi<br />
   <input type="checkbox" name="Fjour[]" value="Vendredi">Vendredi<br>
   <input type="submit" name="envoyer" value="Envvoyer"> 
</form> 
</body>
</html>