<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'autoload.php'; // Assure-toi que Composer est bien installé

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['textarea']);

    // Vérifier que les champs ne sont pas vides
    if (empty($name) || empty($email) || empty($message)) {
        die("Tous les champs sont requis.");
    }

    // Initialiser PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Paramètres SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'jules.anduze@gmail.com'; // Ton email
        $mail->Password = 'uteo fzax spda xptx'; // Ton mot de passe d'application Gmail
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Désactiver la vérification SSL si nécessaire (uniquement pour le test, PAS recommandé en production)
        $mail->SMTPOptions = [
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            ]
        ];

        // Configurer l'expéditeur et le destinataire
        $mail->setFrom($email, $name); // L'expéditeur est la personne qui remplit le formulaire
        $mail->addAddress('jules.anduze@gmail.com', 'Jules'); // Ton adresse email perso où tu reçois les messages

        // Contenu de l'email
        $mail->isHTML(true);
        $mail->Subject = "Nouveau message de $name";
        $mail->Body    = "<p><strong>Nom:</strong> $name</p>
                          <p><strong>Email:</strong> $email</p>
                          <p><strong>Message:</strong> $message</p>";
        $mail->AltBody = "Nom: $name\nEmail: $email\nMessage: $message";

        // Envoyer l'email
        $mail->send();

// Après avoir envoyé l'email, redirige vers la page avec l'ID contact et le paramètre status
header('Location: https://portfolio.julesanduze.fr/index.php?status=success');
exit;

    } catch (Exception $e) {
        echo "Erreur d'envoi de l'email. Erreur : {$mail->ErrorInfo}";
    }
}
?>
