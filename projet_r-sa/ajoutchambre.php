<?php include "home.php"; ?>

<h2>Nouveau Client</h2>
<form action="savechambre.php" method="POST">
    <label for="nom">Nom:</label><br>
    <input type="text" id="nom" name="nom" required><br>
    
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br>
    
    <label for="password">Mot de passe:</label><br>
    <input type="password" id="password" name="password" required><br>
    
    <input type="submit" value="Ajouter Client">
</form>
