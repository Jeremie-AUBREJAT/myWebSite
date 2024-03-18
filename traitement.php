<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collecte des données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Adresse email où envoyer le formulaire
    $destinataire = "jeremie.aubrejat@free.fr";
    
    // Sujet de l'email
    $sujet = "Nouveau message depuis votre formulaire de contact";
    
    // Construction du corps de l'email
    $contenu = "Nom: $nom\n";
    $contenu .= "Prénom: $prenom\n";
    $contenu .= "Email: $email\n\n";
    $contenu .= "Message:\n$message\n";
    
    // Envoi de l'email
    $headers = "From: $nom <$email>";
    
    // Utilisation de la fonction mail() pour envoyer l'email
    if (mail($destinataire, $sujet, $contenu, $headers)) {
        echo "Votre message a bien été envoyé.";
    } else {
        echo "Une erreur s'est produite lors de l'envoi du message.";
    }
} else {
    echo "Une erreur s'est produite. Veuillez réessayer.";
}
?>
