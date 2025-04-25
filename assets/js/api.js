// Fonction pour récupérer les articles en fonction du tag sélectionné
function getArticles() {
  // Récupérer le tag sélectionné depuis l'élément avec l'id "tag"
  const tag = document.getElementById("tag").value;

  // Construire l'URL de l'API Dev.to pour récupérer les articles en fonction du tag sélectionné
  const apiUrl = `https://api.allorigins.win/raw?url=${encodeURIComponent('https://dev.to/api/articles?tag=' + tag)}`;

  // Utilisation de fetch pour récupérer les données de l'API
  fetch(apiUrl)
      .then(response => response.json()) // Si la réponse est OK, la convertir en JSON
      .then(data => displayArticles(data)) // Appeler la fonction displayArticles pour afficher les articles
      .catch(error => console.error('Erreur lors de la récupération des articles:', error)); // Gérer les erreurs de la requête
}

// Fonction pour afficher les articles sur la page
function displayArticles(articles) {
  // Récupérer l'élément où les articles seront affichés
  const articlesContainer = document.getElementById("articles-container");
  // Réinitialiser le contenu de l'élément articlesContainer
  articlesContainer.innerHTML = '';

  // Déterminer le nombre d'articles à afficher selon la taille de la fenêtre (1 article sur mobile, 4 sur desktop)
  const numArticlesToShow = window.innerWidth <= 768 ? 1 : 4;
  // Limiter le nombre d'articles à afficher
  const limitedArticles = articles.slice(0, numArticlesToShow);

  // Si des articles sont disponibles
  if (limitedArticles.length > 0) {
      // Pour chaque article, créer un élément HTML et l'ajouter à l'interface
      limitedArticles.forEach(article => {
          const articleElement = document.createElement("div");
          articleElement.className = "bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300";

          // Construire le contenu HTML de l'article
          articleElement.innerHTML = `
              <img src="${article.social_image || 'https://via.placeholder.com/600x400'}" alt="${article.title}" class="w-full h-48 object-cover">
              <div class="p-4">
                  <h3 class="text-xl font-semibold text-blue-700 mb-2">${article.title}</h3>
                  <p class="text-sm text-gray-600 mb-4">${article.description || 'Pas de description.'}</p>
                  <div class="text-xs text-gray-500 mb-2">
                      <span>Auteur: ${article.user.username}</span> • 
                      <span>${new Date(article.published_at).toLocaleDateString('fr-FR')}</span>
                  </div>
                  <a href="${article.url}" target="_blank" class="inline-block text-sm text-white bg-blue-600 px-4 py-2 rounded hover:bg-blue-700 transition">Lire l'article</a>
              </div>
          `;

          // Ajouter l'article à l'élément "articlesContainer"
          articlesContainer.appendChild(articleElement);
      });
  } else {
      // Si aucun article n'est trouvé, afficher un message
      articlesContainer.innerHTML = "<p class='text-gray-600'>Aucun article trouvé pour ce tag.</p>";
  }
}

// Charger les articles par défaut au chargement de la page
window.onload = function() {
  // Appeler la fonction getArticles pour charger les articles dès que la page est chargée
  getArticles();
};

// Recharger les articles lors du redimensionnement de la fenêtre
window.onresize = function() {
  // Appeler la fonction getArticles pour recharger les articles à chaque fois que la fenêtre est redimensionnée
  getArticles();
};
