
// Fonction pour récupérer les articles en fonction du tag sélectionné
function getArticles() {
    // Récupérer le tag sélectionné
    const tag = document.getElementById("tag").value;
  
    // L'URL de l'API Dev.to pour récupérer les articles en fonction du tag
    const apiUrl = `https://api.allorigins.win/raw?url=${encodeURIComponent('https://dev.to/api/articles?tag=' + tag)}`;

  
    // Utilisation de fetch pour récupérer les données de l'API
    fetch(apiUrl)
        .then(response => response.json())
        .then(data => displayArticles(data))
        .catch(error => console.error('Erreur lors de la récupération des articles:', error));
  }
  
  // Fonction pour afficher les articles sur la page
  function displayArticles(articles) {
    const articlesContainer = document.getElementById("articles-container");
    articlesContainer.innerHTML = '';
  
    const numArticlesToShow = window.innerWidth <= 768 ? 1 : 4;
    const limitedArticles = articles.slice(0, numArticlesToShow);
  
    if (limitedArticles.length > 0) {
      limitedArticles.forEach(article => {
        const articleElement = document.createElement("div");
        articleElement.className = "bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-shadow duration-300";
  
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
  
        articlesContainer.appendChild(articleElement);
      });
    } else {
      articlesContainer.innerHTML = "<p class='text-gray-600'>Aucun article trouvé pour ce tag.</p>";
    }
  }
  
  // Charger les articles par défaut au chargement de la page
  window.onload = function() {
    getArticles();
  };
  
  // Recharger les articles lors du redimensionnement de la fenêtre
  window.onresize = function() {
    getArticles();
  };
  
  