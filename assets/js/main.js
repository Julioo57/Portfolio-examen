// Attendre que le DOM soit complètement chargé avant d'exécuter le script
document.addEventListener("DOMContentLoaded", function () {
    // Log dans la console pour signaler que le script est chargé et prêt
    console.log("Script chargé ! c'est partie !!");

    // Sélectionner tous les liens qui pointent vers une ancre sur la même page (les liens de type #id)
    const scrollLinks = document.querySelectorAll('a[href^="#"]');

    // Ajouter un événement de clic sur chaque lien pour gérer le défilement personnalisé
    scrollLinks.forEach(link => {
        link.addEventListener("click", function (e) {
            e.preventDefault(); // Empêcher le comportement par défaut, qui est de sauter instantanément à la section

            // Récupérer l'ID de la section cible (ex: #section1 devient section1)
            const targetId = this.getAttribute("href").substring(1);
            const targetElement = document.getElementById(targetId);

            // Si l'élément cible existe
            if (targetElement) {
                // Obtenir la position de l'élément cible (par rapport au début du document)
                const position = targetElement.getBoundingClientRect().top + window.pageYOffset;

                // Faire défiler la page avec un décalage de 100 pixels (ajusté pour compenser un en-tête fixe)
                window.scrollTo({
                    top: position - 100, // Décalage de 100 pixels
                    behavior: "smooth"   // Défilement en douceur
                });
            }
        });
    });

    // Sélectionner les éléments pour gérer l'affichage du menu mobile
    const menuToggleButton = document.getElementById("menu-toggle");  // Bouton qui ouvre/ferme le menu
    const mobileMenu = document.getElementById("mobileMenu");  // Le menu mobile

    // Vérifier que le bouton et le menu existent avant d'ajouter l'événement
    if (menuToggleButton && mobileMenu) {
        menuToggleButton.addEventListener("click", () => {
            // Vérifier si le menu est déjà ouvert ou fermé
            const isMenuOpen = mobileMenu.style.display === "block";
            
            // Si le menu est ouvert, le fermer ; sinon, l'ouvrir
            if (isMenuOpen) {
                mobileMenu.style.display = "none";  // Cacher le menu
            } else {
                mobileMenu.style.display = "block";  // Afficher le menu
            }
            
            // Vérifier si les icônes "hamburger" et "croix" existent avant de les manipuler
            const openIcon = menuToggleButton.querySelector("svg:first-child");  // Icône "hamburger"
            const closeIcon = menuToggleButton.querySelector("svg:last-child");  // Icône "croix"
            
            if (openIcon && closeIcon) {
                // Si le menu est ouvert, montrer l'icône "hamburger" et cacher l'icône "croix", et inversement
                if (isMenuOpen) {
                    openIcon.classList.remove("hidden");
                    closeIcon.classList.add("hidden");
                } else {
                    openIcon.classList.add("hidden");
                    closeIcon.classList.remove("hidden");
                }
            }
        });
    }
    
    // === Partie boutons radio et gestion de l'affichage des éléments ===
    // Sélectionner les boutons radio
    const radioFront = document.getElementById("front");
    const radioBack = document.getElementById("back");
    const radioTools = document.getElementById("tools");

    // Sélectionner les groupes d'éléments à afficher/cacher en fonction du choix des boutons radio
    const frontElements = document.querySelectorAll(".front");
    const backElements = document.querySelectorAll(".back");
    const toolsElements = document.querySelectorAll(".tools");
    const message = document.getElementById("message");

    // Vérification que les éléments nécessaires existent
    if (!radioFront || !radioBack || !radioTools) {
        console.error("Erreur: Un ou plusieurs boutons radio sont introuvables !");
        return;
    }

    if (!message) {
        console.error("Erreur: L'élément #message est introuvable !");
        return;
    }

    // Fonction pour masquer tous les groupes d'éléments
    function hideAll() {
        frontElements.forEach(el => el.classList.add("hidden"));
        backElements.forEach(el => el.classList.add("hidden"));
        toolsElements.forEach(el => el.classList.add("hidden"));
        message.classList.remove("hidden"); // Afficher le message par défaut
    }

    // Fonction pour afficher les éléments d'un groupe et masquer le message par défaut
    function showElements(elements) {
        hideAll();
        elements.forEach(el => el.classList.remove("hidden"));
        message.classList.add("hidden"); // Cacher le message lorsque quelque chose est sélectionné
    }

    // Ajouter des écouteurs d'événements sur les boutons radio pour changer d'affichage
    radioFront.addEventListener("change", function () {
        showElements(frontElements);
    });

    radioBack.addEventListener("change", function () {
        showElements(backElements);
    });

    radioTools.addEventListener("change", function () {
        showElements(toolsElements);
    });

    // Masquer tout par défaut au chargement
    hideAll();

    // === Partie gestion des projets ===
    // Données des projets
    const projects = [
        {
            id: 1,
            title: '<h1 class="text-center font-semibold text-xl">Front-end</h1> ',
            description: `
                <ul class="text-center">
                    <li class="font-semibold text-gray-800">Découverte Hmtl -<a href="assets/exercise/jcvd.html" class="text-gray-500 pl-3 text-right">voir</a></li>
                    <li class="font-semibold text-gray-800">Expérimentation Css -<a href="assets/exercise/Css_exo/exoCss.html" class="text-gray-500 pl-3 text-right">voir</a></li>
                    <li class="font-semibold text-gray-800">Jeu Intéractif -<a href="assets/exercise/Duck Hunt/index.html" class="text-gray-500 pl-3 text-right">voir</a></li>
                    <li class="font-semibold text-gray-800">maquettage Figma -<a href="assets/exercise/Figma_rendu/ANDUZE_jules_maquette.docx" class="text-gray-500 pl-3 text-right">voir</a></li>
                </ul>
            `,
            category: "dev", // Catégorie scolaire
        }
        ,
        {
            id: 2,
            title: '<h1 class="text-center font-semibold text-xl">Gesion BDD</h1> ',
            description: `
                <ul class="text-center">
                    <li class="font-semibold text-gray-800">Méthode Merise -<a href="assets/exercise/sql + merise/bdd-merise-film-jules-anduze.pdf" target="_blank" class="text-gray-500 pl-3 text-right">voir</a></li>
                    <li class="font-semibold text-gray-800">MCD -<a href="assets/exercise/sql + merise/film_mcd_jules_anduze.loo"target="_blank" class="text-gray-500 pl-3 text-right">voir</a></li>
                    <li class="font-semibold text-gray-800">Requète sql -<a href="assets/exercise/sql + merise/depot_sql_jules_anduze/sql_requete_jules_anduze.pdf" target="_blank" class="text-gray-500 pl-3 text-right">voir</a></li>
                </ul>
            `,
            category: "dev", // Catégorie scolaire
        },
        {
            id: 3,
            title: '<h1 class="text-center font-semibold text-xl">Back-End</h1> ',
            description: `
                <ul class="text-center">
                    <li class="font-semibold text-gray-800">Site E-commerce (Professionnel) -<a href="https://restaurant.julesanduzesaisondejoie.fr/" target="_blank" class="text-gray-500 pl-3 text-right">voir</a></li>
                    <li class="font-semibold text-gray-800">Restaurant en ligne -<a href="https://restaurant.julesanduze.fr/" target="_blank" class="text-gray-500 pl-3 text-right">voir</a></li>
                </ul>
            `,
            category: "dev", // Catégorie scolaire
        },
        {
            id: 4,
            title: '<h1 class="text-center font-semibold text-xl">Git & GitHub</h1> ',
            description:  `
            <ul class="text-center">
                <li class="font-semibold text-gray-800">Découverte Git -<a href="assets/Bloc_3_Cyber/TP/tp-git/Tp - 4 -Jules-anduze.pdf" target="_blank" class="text-gray-500 pl-3 text-right">voir</a></li>
            </ul>
            `,
            category: "cyber",
        },
        {
            id: 5,
            title: '<h1 class="text-center font-semibold text-xl">Intrusion</h1> ',
            description:  `
            <ul class="text-center">
                <li class="font-semibold text-gray-800">Kali -<a href="assets/Bloc_3_Cyber/TP/tp-kali/tp-kali-jules-anduze.pdf" target="_blank" class="text-gray-500 pl-3 text-right">voir</a></li>
                <li class="font-semibold text-gray-800">Utilman -<a href="assets/Bloc_3_Cyber/TP/tp-intrusion/TP-Intrusion-compte-rendu-anduze-jules.pdf" target="_blank" class="text-gray-500 pl-3 text-right">voir</a></li>
                <li class="font-semibold text-gray-800">Stéganographie -<a href="assets/Bloc_3_Cyber/TP/tp-stégano/Compte_Rendu_TP_Stéganographie.pdf" target="_blank" class="text-gray-500 pl-3 text-right">voir</a></li>
            </ul>
            `,
            category: "cyber",
        },
        {
            id: 6,
            title: '<h1 class="text-center font-semibold text-xl">Raid & Server</h1> ',
            description:  `
            <ul class="text-center">
                <li class="font-semibold text-gray-800">Raid 5 -<a href="assets/Bloc_1_Réseau/tp bloc 1/tp raid-5/Jules_Anduze_Raid-5.pdf" target="_blank" class="text-gray-500 pl-3 text-right">voir</a></li>
                <li class="font-semibold text-gray-800">Serveur NLB -<a href="assets/Bloc_1_Réseau/tp bloc 1/Procédures/NetworkLoadBalancing_JulesAnduze.pdf" target="_blank" class="text-gray-500 pl-3 text-right">voir</a></li>
                <li class="font-semibold text-gray-800">Serveur DHCP  -<a href="assets/Bloc_1_Réseau/tp bloc 1/Procédures/dhcp_failover_jules_anduze.pdf" target="_blank" class="text-gray-500 pl-3 text-right">voir</a></li> 
            </ul>
            `,
            category: "infra",
        },
        {
            id: 7,
            title: '<h1 class="text-center font-semibold text-xl">Window Server</h1> ',
            description:  `
            <ul class="text-center">
                <li class="font-semibold text-gray-800">Utilisateur Glpi (Ajout) -<a href="assets/Bloc_1_Réseau/tp bloc 1/Procédures/Comment_ajouter_un_utilisateur_sur_GLPI_Jules_Anduze.pdf" target="_blank" class="text-gray-500 pl-3 text-right">voir</a></li>
                <li class="font-semibold text-gray-800">Utilisateur intinérant Glpi -<a href="assets/Bloc_1_Réseau/tp bloc 1/Procédures/Comment_créer_un_utilisateur_itinérant_jules_anduze.pdf"assets/Bloc_3_Cyber/TP/tp-intrusion/TP-Intrusion-compte-rendu-anduze-jules.pdf" target="_blank" class="text-gray-500 pl-3 text-right">voir</a></li>
                <li class="font-semibold text-gray-800">Utilisateur obligatoire Glpi -<a href="assets/Bloc_1_Réseau/tp bloc 1/Procédures/Comment_créer_un_utilisateur_obligatoire_jules_anduze.pdf" target="_blank" class="text-gray-500 pl-3 text-right">voir</a></li>
                <li class="font-semibold text-gray-800">Création d'audit -<a href="assets/Bloc_1_Réseau/tp bloc 1/Procédures/Proécdures-audit-jules-anduze.pdf" target="_blank" class="text-gray-500 pl-3 text-right">voir</a></li>
                <li class="font-semibold text-gray-800">Audit connexion -<a href="assets/Bloc_1_Réseau/tp bloc 1/Procédures/procédures_audit_connexion_jules_anduze.pdf" target="_blank" class="text-gray-500 pl-3 text-right">voir</a></li>
            </ul>
            `,
            category: "infra",
        },
        {
            id: 8,
            title: '<h1 class="text-center font-semibold text-xl">Script Powershell</h1> ',
            description:  `
            <ul class="text-center">
                <li class="font-semibold text-gray-800">Jeu dynamique -<a href="assets/Bloc_1_Réseau/script/jeu.ps1" target="_blank" class="text-gray-500 pl-3 text-right">voir</a></li>
                <li class="font-semibold text-gray-800">Stockage disponible -<a href="assets/Bloc_1_Réseau/script/disk_jules_anduze.ps1" target="_blank" class="text-gray-500 pl-3 text-right">voir</a></li>
                <li class="font-semibold text-gray-800">Création de boucle -<a href="assets/Bloc_1_Réseau/script/if_else_jules_anduze.ps1" target="_blank" class="text-gray-500 pl-3 text-right">voir</a></li>
                <li class="font-semibold text-gray-800">Petit jeu -<a href="assets/Bloc_1_Réseau/script/petit_jeu_jules_anduze.ps1" target="_blank" class="text-gray-500 pl-3 text-right">voir</a></li>
            </ul>
            `,
            category: "infra",
        },
    ];

    const projectContainer = document.getElementById("projectContainer");  // Conteneur où afficher les projets
    const projectSelector = document.getElementById("projectSelector");  // Sélecteur de catégorie de projet

    // Fonction pour afficher les projets filtrés par catégorie
    function displayProjects(category) {
        projectContainer.innerHTML = ''; // Vider le conteneur avant de réafficher

        // Filtrer les projets par catégorie
        const filteredProjects = projects.filter(project => project.category === category || category === "all");

        // Affichage des projets filtrés
        filteredProjects.forEach(project => {
            const projectElement = document.createElement('div');
            projectElement.classList.add("bg-white", "p-6", "rounded-2xl", "shadow-lg", "transition-all", "duration-500", "hover:scale-105", "hover:shadow-2xl", "transform", project.style);

            projectElement.innerHTML = `
                <h3 class="text-xl font-bold text-white mb-3">${project.title}</h3>
                <p class="text-white">${project.description}</p>
            `;
            projectContainer.appendChild(projectElement);
        });
    }

    // Écouter le changement de catégorie sélectionnée dans le sélecteur
    projectSelector.addEventListener('change', function () {
        const selectedCategory = projectSelector.value;
        displayProjects(selectedCategory);
    });

    // Afficher les projets par défaut au chargement
    displayProjects("dev"); // Catégorie par défaut
});