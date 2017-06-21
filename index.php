<!DOCTYPE html>
<html>
  <head>
  <title>Creation d'une Activité</title>
  <meta charset="UTF-8">
  <link href="main.css" rel="stylesheet">
  </head>
  <body>
    <h1>Création de Cours<br> Code Académie</h1>
    <form action="exportToXML.php" method="post">
      <p>Programme : <input type="text" name="Programme"></p>
      <p>Language du Module : <input type="text" name="LanguageModule"></p>
      <p>Groupe du Module : <input type="text" name="GroupeModule"></p>
      <p>Objectif du Module : <input type="text" name="ObjectifModule"></p>
      <p>Prérequis du Module : <input type="text" name="Prerequis"></p>
      <p>Materiel pour le Module : <input type="text" name="Materiel"></p>
      <p>Sequence : <input type="text" name="Sequence"></p>
      <p>Objectif de la Sequence : <input type="text" name="ObjectifSequence"></p>
      <p>Code de la Sequence : <input type="text" name="CodeSequence"></p>
      <p>Activité déja faite? : <input type="radio" name="done" value="false" checked> Non
      <input type="radio" name="done" value="true"> Oui</p>
      <p>Objectif de l'Activité : <input type="text" name="Objectif"></p>
      <p>Code de l'Activité : <input type="text" name="Code"></p>
      <p>Temps de l'Activité : <input type="text" name="Temps"></p>
      <p>Sous Objectif de l'Activité : <input type="text" name="SousObjectif"></p>
      <p>Description de l'Activité : <textarea  rows="20" name="Description"></textarea></p>
      <p><input type="submit" value="OK"></p>
    </form>
  </body>
</html>