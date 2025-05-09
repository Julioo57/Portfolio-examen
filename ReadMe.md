# 🌐 Portfolio - Jules Anduze

Bienvenue sur le dépôt GitHub de mon portfolio professionnel, réalisé dans le cadre de ma formation en développement web. Ce site présente mon parcours, mes compétences, mes projets et permet un contact direct via un formulaire.

🔗 **Portfolio en ligne** : [https://portfolio.julesanduze.fr](https://portfolio.julesanduze.fr)  
📁 **Dépôt GitHub** : [github.com/Julioo57/Portfolio-examen](https://github.com/Julioo57/Portfolio-examen)

---

## 🧾 Sommaire

- [Aperçu](#-aperçu)
- [Fonctionnalités](#-fonctionnalités)
- [Technologies utilisées](#-technologies-utilisées)
- [Structure du projet](#-structure-du-projet)
- [Installation en local](#-installation-en-local)
- [Crédits et sources](#-crédits-et-sources)

---

## 👀 Aperçu

Le portfolio met en avant mon profil professionnel, mes projets, les technologies que je maîtrise, ainsi qu’une section d’actualités alimentée par une API. Il est responsive, moderne et conforme aux bonnes pratiques du web.

---

## 🚀 Fonctionnalités

- Affichage dynamique d'actualités informatiques via l’API [Dev.to](https://dev.to/api).
- Présentation des projets avec détails techniques.
- Section dédiée aux compétences techniques (HTML, CSS, JS, PHP...).
- Formulaire de contact fonctionnel via **PHPMailer**.
- Design responsive avec **Tailwind CSS**.
- Intégration de liens vers mon LinkedIn, GitHub et mon CV.
- Mentions légales disponibles.

---

## 🛠️ Technologies utilisées

| Catégorie        | Outils & Langages                           |
|------------------|---------------------------------------------|
| **Front-end**     | HTML, CSS, JavaScript, Tailwind CSS         |
| **Back-end**      | PHP, PHPMailer                             |
| **API externe**   | [Dev.to API](https://developers.forem.com/api) |
| **IDE**           | Visual Studio Code                         |
| **Serveur local** | XAMPP                                      |
| **Hébergement**   | Infomaniak                                 |
| **Versioning**    | Git, GitHub                                |
| **Navigateurs**   | Chrome, Firefox                            |

---

## 🗂️ Structure du projet

Portfolio-examen/
├── assets/
│ ├── css/ # Feuilles de style (ex. Tailwind)
│ ├── js/ # Scripts JavaScript personnalisés
│ └── images/ # Ressources visuelles
├── vendor/ # Bibliothèques tierces (PHPMailer, etc.)
├── index.php # Page principale du site
├── MentionsLegale.html # Mentions légales obligatoires
├── README.md # Documentation du projet
└── .gitignore # Fichiers ignorés par Git


---

## ⚙️ Installation en local
 Lancer le serveur local avec XAMPP
Cloner le dépôt :
Si ce n’est pas encore fait, commencez par cloner le dépôt sur votre machine :

bash
Copier
Modifier
git clone https://github.com/Julioo57/Portfolio-examen.git
Déplacer le projet dans le répertoire XAMPP :
Copiez le dossier cloné dans le répertoire htdocs de XAMPP.

Sous Windows : C:/xampp/htdocs/

Sous macOS : /Applications/XAMPP/htdocs/

Démarrer XAMPP :

Ouvrez le panneau de contrôle XAMPP.

Lancez les services Apache et MySQL en cliquant sur "Start" à côté de chaque service.

Accéder à votre portfolio :
Ouvrez votre navigateur et entrez l'URL suivante pour accéder à votre portfolio localement :

text
Copier
Modifier
http://localhost/Portfolio-examen
📧 Configurer PHPMailer (si nécessaire)
Si vous souhaitez que le formulaire de contact envoie des emails, vous devrez configurer PHPMailer pour l’envoi des mails via un serveur SMTP.

Ouvrez le fichier contact.php (ou un fichier similaire) dans lequel PHPMailer est utilisé.

Modifiez la configuration SMTP en renseignant vos informations d’authentification SMTP (serveur, port, utilisateur, mot de passe).

Testez l'envoi du formulaire pour vous assurer que tout fonctionne correctement.

📚 Crédits et sources documentaires
W3Schools – Documentation de base pour HTML et CSS.

TailwindCSS Documentation – Guide complet pour la création d'un design responsive.

MDN Web Docs – Documentation technique sur HTML, CSS et JavaScript.

Dev.to API – API utilisée pour afficher des actualités en temps réel.

PHPMailer GitHub – Bibliothèque pour l'envoi d'emails via le formulaire de contact.

📩 Contact
Si vous avez des questions, des suggestions ou des remarques, n'hésitez pas à me contacter via le formulaire intégré sur le site, ou par mes profils sociaux :

LinkedIn

GitHub

© 2025 Jules Anduze – Tous droits réservés.

