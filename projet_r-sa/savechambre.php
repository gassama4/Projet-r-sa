<?php
include "db.php";

// Vérification des données reçues
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des valeurs du formulaire
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Préparation de la requête SQL
    $sql = "INSERT INTO client (nom, email, password) VALUES (?, ?, ?)";
    
    // Préparation de la déclaration et liaison des paramètres
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nom, $email, $password);
    
    // Exécution de la requête
    if ($stmt->execute()) {
        echo "Nouveau client ajouté avec succès.";
    } else {
        echo "Erreur lors de l'ajout du client: " . $stmt->error;
    }
    
    // Fermeture de la déclaration et de la connexion
    $stmt->close();
    $conn->close();
}
?>
