<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PortFolio | Jules Anduze</title>
    <script src="https://kit.fontawesome.com/ab09c2f170.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="scroll-smooth bg-gray-100 font-sans antialiased">
<header class="sticky top-0 z-50">
    <nav class="bg-white border-gray-200 px-4 lg:px-6 py-6 dark:bg-gray-800">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="index.php" class="flex items-center">
                <span class="self-center text-xl font-bold whitespace-nowrap dark:text-white">Jules Anduze</span>
            </a>
            <div class="flex items-center lg:order-2">
                <a href="#contact" class="text-white bg-indigo-700 hover:bg-indigo-800 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-6 py-3 transition-all duration-300 ease-in-out shadow-lg hover:shadow-xl focus:outline-none">
                    Contact
                </a>
                <button id="menu-toggle" data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Ouvrir le menu principal</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="#accueil" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-indigo-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Accueil</a>
                    </li>
                    <li>
                        <a href="#about" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-indigo-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Compétences</a>
                    </li>
                    <li>
                        <a href="#projects" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-indigo-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Projets</a>
                    </li>
                    <li>
                        <a href="#actualite" class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-indigo-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Actualités</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- Mobile Menu -->
<div class="md:hidden" id="mobileMenu" style="display: none;">
    <ul class="space-y-4 bg-gray-800 p-6 text-white">
        <li>
            <a href="#accueil" class="block py-2 px-4 text-white rounded-lg bg-indigo-700 hover:bg-indigo-800 transition-all duration-300 ease-in-out">Accueil</a>
        </li>
        <li>
            <a href="#about" class="block py-2 px-4 text-white rounded-lg bg-indigo-700 hover:bg-indigo-800 transition-all duration-300 ease-in-out">Compétences</a>
        </li>
        <li>
            <a href="#projects" class="block py-2 px-4 text-white rounded-lg bg-indigo-700 hover:bg-indigo-800 transition-all duration-300 ease-in-out">Projets</a>
        </li>
        <li>
            <a href="#actualite" class="block py-2 px-4 text-white rounded-lg bg-indigo-700 hover:bg-indigo-800 transition-all duration-300 ease-in-out">Actualités</a>
        </li>
    </ul>
</div>
<main>
  <section class="section" id="accueil">
    <div>
      <div class="flex h-screen items-center justify-center bg-gray-900 p-5">
        <div class="grid md:grid-cols-2 grid-cols-1 items-center gap-10 md:px-10">
          <div>
            <h1 class="mb-2 text-3xl font-bold text-white"><span class="text-green-500">Bonjour,</span> je suis apprenti Développeur Full Stack</h1>
            <p class="mb-6 text-white">Je suis un jeune étudiant passionné d’informatique depuis mon enfance, avec pour objectif d’en faire mon métier à travers le développement applicatif. J’étudie actuellement en BTS SIO à <strong><a href='https://www.mewo.fr/' target='_blank'>Mewo</a></strong>. Vous pouvez télécharger mon CV ci-dessous.</p>
            <div class="flex justify-center space-x-5">
              <a href="#contact" class="flex w-full items-center justify-center gap-1 rounded-2xl bg-blue-600 p-5 py-3 font-semibold text-white hover:bg-blue-700">
                Contact
              </a>
              <a class="flex w-full items-center justify-center gap-2 rounded-2xl bg-white p-5 py-3 font-semibold" href="assets/doc/Jules_Anduze_CV_3.pdf" download="assets/doc/Jules_Anduze_CV_3.pdf">
                Cirriculum vitae 
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m9 12.75 3 3m0 0 3-3m-3 3v-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
              </a>
            </div>
          </div>
          <div>
            <img src="assets/img/moi.jpg" alt="moi" class="md:size-96 size-72 rounded-full " />
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-gradient-to-b from-gray-100 to-gray-300 py-16 section" id="about">
    <div class="max-w-6xl mx-auto px-6">
      <h2 class="text-5xl font-extrabold text-gray-800 text-center mb-12">À Propos de Moi</h2>
      
      <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
        <!-- Cursus scolaire -->
        <div class="bg-white p-8 rounded-2xl shadow-lg">
          <h3 class="text-3xl font-bold text-gray-700 mb-6">Cursus Scolaire</h3>
          <ul class="space-y-4 text-gray-600">
            <li><span class="font-semibold text-gray-800">Futur - Développeur FullStack (Bac +3)</span> - Campus Mewo</li>
            <li><span class="font-semibold text-gray-800">2023 - BTS SIO (SLAM) (Bac +2)</span> - Campus Mewo</li>
            <li><span class="font-semibold text-gray-800">2020 - BAC Technologique</span> - Lycée Louis Cormontainge</li>
          </ul>
        </div>
        
        <!-- Certifications -->
        <div class="bg-white p-8 rounded-2xl shadow-lg">
          <h3 class="text-3xl font-bold text-gray-700 mb-6">Certifications</h3>
          <ul class="space-y-4 text-gray-600">
            <li><a href="assets/doc/certif/cyberSens.pdf" download="cyberSens.pdf"><span class="font-semibold text-gray-800">2024 - Certification CyberSécurité</span> - CyberSens</a></li>
            <li><a href="assets/doc/certif/rgpd.zip" download="rgpd.zip"><span class="font-semibold text-gray-800">2024 - Certification CyberSécurité</span> - Atelier RGPD (1 à 5)</a></li>
            <li><a href="assets/doc/certif/secnum.pdf" download="secnum.pdf"><span class="font-semibold text-gray-800">2024 - Certification CyberSécurité</span> - SecNum Académie</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="py-16 px-6 max-w-6xl mx-auto">
      <div class="bg-white p-8 rounded-2xl shadow-lg relative">
        <h3 class="text-3xl font-bold text-gray-700 mb-6">Technologies & Outils</h3>
        <div class="flex flex-nowrap gap-2 sm:absolute sm:top-6 sm:right-6">

          <!-- Conteneur des radios positionné à droite -->
          <label
            for="front"
            class="font-medium flex items-center px-3 gap-3 rounded-lg relative w-32 h-14 hover:bg-zinc-100 has-[:checked]:text-blue-500 has-[:checked]:bg-blue-50 has-[:checked]:ring-blue-300 has-[:checked]:ring-1 select-none"
          >
            <div class="w-5">
            </div>
            Front
            <input
              type="radio"
              name="status"
              class="peer/front w-4 h-4 absolute right-2 accent-current"
              id="front"
            />
          </label>
    
          <label
            for="back"
            class="font-medium flex items-center px-3 gap-3 rounded-lg relative w-32 h-14 hover:bg-zinc-100 has-[:checked]:text-blue-500 has-[:checked]:bg-blue-50 has-[:checked]:ring-blue-300 has-[:checked]:ring-1 select-none"
          >
            <div class="w-5">
            </div>
            Back
            <input
              type="radio"
              name="status"
              class="w-4 h-4 absolute right-2 accent-current"
              id="back"
            />
          </label>
    
          <label
            for="tools"
            class="font-medium flex items-center px-3 gap-3 rounded-lg relative w-32 h-14 hover:bg-zinc-100 has-[:checked]:text-blue-500 has-[:checked]:bg-blue-50 has-[:checked]:ring-blue-300 has-[:checked]:ring-1 select-none"
          >
            <div class="w-5">
              <!-- Pas d'image ici pour "Rien" -->
            </div>
            outils
            <input
              type="radio"
              name="status"
              class="w-4 h-4 absolute right-2 accent-blue-500"
              id="tools"
            />
          </label>
        </div>
    
        <!-- Contenu des images des technologies -->
        <p class="font-semibold text-red-700 text-center" id="message">Sélectionnez un domaine</p>
        <div class="grid grid-cols-3 sm:grid-cols-8 gap-10"> <!-- Réduction encore plus de l'écart -->
          <!-- front -->
          <div class="w-auto p-2 border rounded-lg bg-gray shadow-sm front hidden">
            <img src="assets/img/HTML5_logo.svg.png" alt="HTML" class="w-16 h-16 mx-auto hover:scale-105 transition-transform duration-300">
          </div>
          <div class="w-auto p-3 border rounded-lg bg-white shadow-sm front hidden">          
            <img src="assets/img/css_logo.png" alt="CSS" class="w-16 h-16 mx-auto hover:scale-105 transition-transform duration-300">
          </div>
          <div class="w-auto p-3 border rounded-lg bg-white shadow-sm front hidden">      
            <img src="assets/img/javascript_logo.png" alt="JavaScript" class="w-16 h-16 mx-auto hover:scale-105 transition-transform duration-300">
          </div>
          <div class="w-auto p-3 border rounded-lg bg-white shadow-sm front hidden">          
            <img src="assets/img/bootstrap.jpg" alt="bootstrap" class="w-16 h-16 mx-auto hover:scale-105 transition-transform duration-300">
          </div>
          <div class="w-auto p-3 border rounded-lg bg-white shadow-sm front hidden">
            <img src="assets/img/tailwind.png" alt="tailwind" class="w-16 h-16 mx-auto hover:scale-105 transition-transform duration-300">
          </div>
          <!-- back  -->
          <div class="w-auto p-3 border rounded-lg bg-white shadow-sm back hidden">
            <img src="assets/img/php_logo.png" alt="php" class="w-16 h-16 mx-auto hover:scale-105 transition-transform duration-300">
          </div>
          <div class="w-auto p-3 border rounded-lg bg-white shadow-sm back hidden">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL" class="w-16 h-16 mx-auto hover:scale-105 transition-transform duration-300">
          </div>
          <!-- tools  -->
          <div class="w-auto p-3 border rounded-lg bg-white shadow-sm tools hidden">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg" alt="Git" class="w-16 h-16 mx-auto hover:scale-105 transition-transform duration-300">
          </div>
          <div class="w-auto p-3 border rounded-lg bg-white shadow-sm tools hidden">
            <img src="assets/img/figma-icon.svg" alt="figma" class="w-16 h-16 mx-auto hover:scale-105 transition-transform duration-300">
          </div>
          <div class="w-auto p-3 border rounded-lg bg-white shadow-sm tools hidden">
            <img src="assets/img/font-awesome-icon.svg" alt="fontawesome" class="w-16 h-16 mx-auto hover:scale-105 transition-transform duration-300">
          </div>
          <div class="w-auto p-3 border rounded-lg bg-white shadow-sm tools hidden">
            <img src="assets/img/notion-icon.svg" alt="notion" class="w-16 h-16 mx-auto hover:scale-105 transition-transform duration-300">
          </div>
          <div class="w-auto p-3 border rounded-lg bg-white shadow-sm tools hidden">
            <img src="assets/img/vscode.svg" alt="vscode" class="w-16 h-16 mx-auto hover:scale-105 transition-transform duration-300">
          </div>
          <div class="w-auto p-3 border rounded-lg bg-white shadow-sm tools hidden">
            <img src="assets/img/vitejsdev-icon.svg" alt="vite" class="w-16 h-16 mx-auto hover:scale-105 transition-transform duration-300">
          </div>
          <div class="w-auto p-3 border rounded-lg bg-white shadow-sm tools hidden">
            <img src="assets/img/slack-icon.svg" alt="slack" class="w-16 h-16 mx-auto hover:scale-105 transition-transform duration-300">
          </div>
          <div class="w-auto p-3 border rounded-lg bg-white shadow-sm tools hidden">
            <img src="assets/img/xampp.png" alt="xampp" class="w-16 h-16 mx-auto hover:scale-105 transition-transform duration-300">
          </div>
          <div class="w-auto p-3 border rounded-lg bg-white shadow-sm tools hidden">
            <img src="assets/img/wordpress.png" alt="Wordpress" class="w-16 h-16 mx-auto hover:scale-105 transition-transform duration-300">
          </div>
          </div>
      </div>
    </div>  
    </div>
</section>
  <section id="projects" class="py-16 bg-gradient-to-b from-gray-100 to-gray-200 section">
    <div class="max-w-6xl mx-auto px-6">
      <div class="flex justify-between items-center mb-12">
        <h2 class="text-5xl font-extrabold text-gray-800">Mes Projets</h2>
        <!-- Sélecteur aligné avec le titre -->
        <div class="w-64">
          <select id="projectSelector" class="p-2 w-full border border-gray-400 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500">
            <option value="dev">Projets de développement</option>
            <option value="infra">Projets système & réseaux</option>
            <option value="cyber">Projets de Cybersécurité</option>
          </select>
        </div>
      </div>
  
      <div id="projectContainer" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Exemple de projet -->
        <div class="bg-white p-6 rounded-2xl shadow-lg transition-all duration-500 hover:scale-105 hover:shadow-2xl transform">
          <h3 class="text-xl font-bold text-gray-800 mb-3">Projet Exemple</h3>
          <p class="text-gray-600">Description exemple</p>
        </div>
      </div>
    </div>
  </section>
  <section id="actualite" class="min-h-screen py-16 px-4 bg-gradient-to-b from-gray-100 to-gray-200">
    <div class="max-w-6xl mx-auto">
      
      <!-- Titre et sélection -->
      <div class="flex flex-col sm:flex-row items-center justify-between mb-10">
        <h2 class="text-3xl font-bold text-blue-700 mb-4 sm:mb-0">Articles Dev.to par tag</h2>
        <div class="flex items-center gap-2">
          <label for="tag" class="text-lg font-medium">Tag :</label>
          <select id="tag" onchange="getArticles()" class="p-2 rounded border border-gray-300 shadow-sm">
            <option value="technology">Technologie</option>
            <option value="webdev">Web</option>
            <option value="javascript">JavaScript</option>
          </select>
        </div>
      </div>

      <!-- Conteneur des articles -->
      <div id="articles-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Les articles s'afficheront ici -->
      </div>

    </div>
  </section>

        <section class="bg-blue-50 dark:bg-slate-800"  id="contact">
          <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-20">
              <div class="mb-4">
                  <div class="mb-6 max-w-3xl text-center sm:text-center md:mx-auto md:mb-12">
                      <h2
                          class="font-heading mb-4 font-bold tracking-tight text-gray-900 dark:text-white text-3xl sm:text-5xl">
                          Prendre contact
                      </h2>
                      <p class="mx-auto mt-4 max-w-3xl text-xl text-gray-600 dark:text-slate-400">Restons connectés !
                      </p>
                  </div>
              </div>
              <div class="flex items-stretch justify-center">
                  <div class="grid md:grid-cols-2">
                      <div class="h-full pr-6">
                          <p class="mt-3 mb-12 text-lg text-gray-600 dark:text-slate-400">
                          Un projet web en tête ? Une question sur le web ou une autre demande particulière ?
                          N'hésitez pas à me contacter via le formulaire ci-dessous, par téléphone ou par mail.
                          Je vous répondrai dans les plus brefs délais
                          </p>
                          <ul class="mb-6 md:mb-0">
                              <li class="flex">
                                  <div class="flex h-10 w-10 items-center justify-center rounded bg-blue-900 text-gray-50">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round" class="h-6 w-6">
                                          <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                          <path
                                              d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z">
                                          </path>
                                      </svg>
                                  </div>
                                  <div class="ml-4 mb-4">
                                      <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900 dark:text-white">Adresse
                                      </h3>
                                      <p class="text-gray-600 dark:text-slate-400">Metz, France</p>
                                  </div>
                              </li>
                              <li class="flex">
                                  <div class="flex h-10 w-10 items-center justify-center rounded bg-blue-900 text-gray-50">
                                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                          fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                          stroke-linejoin="round" class="h-6 w-6">
                                          <path
                                              d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2">
                                          </path>
                                          <path d="M15 7a2 2 0 0 1 2 2"></path>
                                          <path d="M15 3a6 6 0 0 1 6 6"></path>
                                      </svg>
                                  </div>
                                  <div class="ml-4 mb-4">
                                      <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900 dark:text-white">Contact
                                      </h3>
                                      <p class="text-gray-600 dark:text-slate-400">Téléphone :  +(33) 06 56 71 11 07</p>
                                      <p class="text-gray-600 dark:text-slate-400">Email :  jules.anduze@gmail.com</p>
                                  </div>
                              </li>
                          </ul>
                      </div>
                      <div class="card h-fit max-w-6xl p-5 md:p-12" id="form">
                          <h2 class="mb-4 text-2xl font-bold dark:text-white">Êtes-vous prêt(e)(s) à commencer ?</h2>
                      <?php
                        // Vérifier si le statut de succès est présent dans l'URL
                        if (isset($_GET['status']) && $_GET['status'] == 'success') {
                            echo '<div style="color: green; text-align: center; margin-bottom: 20px;">Votre message a été envoyé avec succès !</div>';
                        }
                      ?>
                      <form id="contactForm" method="POST" action="vendor/send-mail.php">
                          <div class="mb-6">
                              <div class="mx-0 mb-1 sm:mb-4">
                                  <div class="mx-0 mb-1 sm:mb-4">
                                      <label for="name" class="pb-1 text-xs uppercase tracking-wider"></label>
                                      <input type="text" id="name" autocomplete="given-name" placeholder="Pierre Dupont" class="mb-2 w-full rounded-md border border-gray-400 py-2 pl-2 pr-4 shadow-md text-grey-800  sm:mb-0" name="name" required>
                                  </div>
                                  <div class="mx-0 mb-1 sm:mb-4">
                                      <label for="email" class="pb-1 text-xs uppercase tracking-wider"></label>
                                      <input type="email" id="email" autocomplete="email" placeholder="pierre.dupont@domaine.fr" class="mb-2 w-full rounded-md border border-gray-400 py-2 pl-2 pr-4 shadow-md text-grey-800 sm:mb-0" name="email" required>
                                  </div>
                              </div>
                              <div class="mx-0 mb-1 sm:mb-4">
                                  <label for="textarea" class="pb-1 text-xs uppercase tracking-wider"></label>
                                  <textarea id="textarea" name="textarea" cols="30" rows="5" placeholder="Ecrivez votre message..." class="mb-2 w-full rounded-md border border-gray-400 py-2 pl-2 pr-4 shadow-md text-grey-800 sm:mb-0" required></textarea>
                              </div>
                          </div>
                          <div class="text-center">
                              <button type="submit" class="w-full bg-blue-800 text-white px-6 py-3 font-xl rounded-md sm:mb-0">Envoyer</button>
                          </div>
                      </form>

                        
                      </div>
                  </div>
              </div>
          </div>
      </section>
    </main>
    <footer class="bg-gray-900 pt-12 pb-6 px-10 tracking-wide">
        <div class="max-w-screen-xl mx-auto">
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="lg:flex lg:items-center">
              <a href="index.php">
                <strong class="text-2xl text-white">jules anduze</strong>
              </a>
            </div>
  
            <div class="lg:flex lg:items-center">
              <ul class="flex space-x-6">
                <li>
                  <a href="https://github.com/Julioo57" target="_blank">
                    <i class="fa-brands fa-github text-gray-300 hover:fill-white w-7 h-7"  viewBox="0 0 24 24"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/in/jules-anduze-/" target="_blank">
                    <i class="fa-brands fa-linkedin text-gray-300 hover:fill-white w-7 h-7"  viewBox="0 0 24 24"></i>
                  </a>
                </li>
                <li>
                  <a href="assets/doc/Jules_Anduze_CV_3.pdf" download="assets/doc/Jules_Anduze_CV_3.pdf">
                    <i class="fa-solid fa-file text-gray-300 hover:fill-white w-7 h-7"  viewBox="0 0 24 24"></i>
                  </a>
                </li>
              </ul>
            </div>
  
            <div>
              <h4 class="text-am mb-6 text-white">Liens Utiles</h4>
              <ul class="space-y-4 pl-2">
                <li>
                  <a href="#contact" class="text-gray-400 hover:text-white text-sm">Contact</a>
                </li>
                <li>
                  <a href="#projects" class="text-gray-400 hover:text-white text-sm">Projets</a>
                </li>
                <li>
                  <a href="#actualite" class="text-gray-400 hover:text-white text-sm">Actualités</a>
                </li>
              </ul>
            </div>
  
            <div>
              <h4 class="text-am mb-6 text-white">Informations</h4>
              <ul class="space-y-4 pl-2">
                <li>
                  <a href="#accueil" class="text-gray-400 hover:text-white text-sm">Accueil</a>
                </li>
                <li>
                  <a href="#about" class="text-gray-400 hover:text-white text-sm">A propos de moi</a>
                </li>
                <li>
                  <a href="MentionsLegale.html" class="text-gray-400 hover:text-white text-sm">Mentions Légales</a>
                </li>
              </ul>
            </div>
          </div>
          <p class="text-gray-400 text-sm mt-10">© Jules Anduze. Tous droits réservés. Mise à jour le : 26/03/2025</p>
          </p>
        </div>
    </footer>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/api.js"></script>
</body>
</html>
