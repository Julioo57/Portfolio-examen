<?php

// Affiche les erreurs et les avertissements pour faciliter le débogage
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Utilisation des classes PHPMailer et Exception de la bibliothèque PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Charge l'autoloader de Composer, pour s'assurer que les dépendances sont bien chargées
require 'autoload.php'; // Assure-toi que Composer est bien installé

// Vérifie si la requête est une soumission de formulaire (méthode POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère les données envoyées par le formulaire et les sécurise avec htmlspecialchars pour éviter les injections XSS
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['textarea']);

    // Vérifie que les champs obligatoires ne sont pas vides
    if (empty($name) || empty($email) || empty($message)) {
        // Si un champ est vide, on arrête l'exécution et affiche un message d'erreur
        die("Tous les champs sont requis.");
    }

    // Crée une nouvelle instance de PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Paramétrage du serveur SMTP
        $mail->isSMTP(); // Utilisation du protocole SMTP
        $mail->Host = 'smtp.gmail.com'; // Serveur SMTP de Gmail
        $mail->SMTPAuth = true; // Authentification requise pour se connecter au serveur SMTP
        $mail->Username = 'jules.anduze@gmail.com'; // Ton adresse email Gmail (utilisée pour envoyer le mail)
        $mail->Password = 'uteo fzax spda xptx'; // Mot de passe d'application spécifique à ton compte Gmail
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Utilisation de l'encryptage TLS pour sécuriser la connexion
        $mail->Port = 587; // Port utilisé pour la connexion SMTP avec encryption

        // Désactive la vérification SSL si nécessaire (utilisé principalement pour les tests)
        // Pas recommandé en production
        $mail->SMTPOptions = [
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            ]
        ];

        // Configure l'expéditeur et le destinataire de l'email
        $mail->setFrom($email, $name); // L'adresse email de l'expéditeur (celle du formulaire) et son nom
        $mail->addAddress('jules.anduze@gmail.com', 'Jules'); // L'adresse email de destination où l'email sera envoyé (ton email)

        // Contenu du message
        $mail->isHTML(true); // Le corps du message sera en HTML
        $mail->Subject = "Nouveau message de $name"; // Sujet de l'email, contenant le nom de l'expéditeur
        // Corps du message en HTML
        $mail->Body    = "<p><strong>Nom:</strong> $name</p>
                          <p><strong>Email:</strong> $email</p>
                          <p><strong>Message:</strong> $message</p>";
        // Corps du message en texte brut, pour les clients qui ne supportent pas le HTML
        $mail->AltBody = "Nom: $name\nEmail: $email\nMessage: $message";

        // Envoi de l'email
        $mail->send();

        // Si l'email est envoyé avec succès, redirige l'utilisateur vers la page avec un paramètre 'status' à 'success'
        header('Location: https://portfolio.julesanduze.fr/index.php?status=success');
        exit; // Arrête l'exécution du script après la redirection

    } catch (Exception $e) {
        // Si une erreur survient lors de l'envoi, affiche l'erreur avec le message d'exception
        echo "Erreur d'envoi de l'email. Erreur : {$mail->ErrorInfo}";
    }
}
?>
