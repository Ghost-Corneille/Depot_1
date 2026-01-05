<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nom = htmlspecialchars($_POST["nom"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $destinataire = "sabinkaleta74@gmail.com";
    $sujet = "Nouveau message depuis le portfolio";
    $contenu = "
    Nom : $nom
    Email : $email

    Message :
    $message
    ";

    $headers = "From: $email";

    if (mail($destinataire, $sujet, $contenu, $headers)) {
        echo "<h2>Message envoyé avec succès ✅</h2>";
        echo "<a href='contact.html'>Retour</a>";
    } else {
        echo "<h2>Erreur lors de l'envoi ❌</h2>";
        echo "<a href='contact.html'>Retour</a>";
    }
}
?>
