// Google map ----------------------------------------------------------------------------------------------------------------


// Commentaires dynamiques ----------------------------------------------------------------------------------------------------------

// définir fonction rand
function rand(min, max) {
    let resultat = min;
    let decalage = max - min + 1;
  
    let aleatoire = Math.random();
    let entier = Math.floor(aleatoire * decalage);
  
    resultat += entier;
  
    return resultat;
  }
  
  // sélectionner la balise à dynamiser
  let p_commentaire = document.querySelector(".p_commentaire");
  let conteneur_commentaire = document.querySelector(".conteneur_commentaire");
  
  // créer tableau des commentaires
  const tableau_commentaires = [
    "Excellent service et de la nourrite absolument délicieuse!",
    "Pub G4 est ma destination favorite lorsque je veux recevoir des invités. Fiables et toujours une ambiance très agréable.",
    "Même si les prix ne sont pas les plus bas, Pub G4 est une référence dans la qualité du service et de leur mets. Je recommande!",
    "Woow! Superbe présentation et le meilleur fish & chips que je n'ai jamais mangé!",
    "Une expérience agréable et un service de qualité, dommage que ce ne soit pas plus proche!",
    "Si vous commandez à boire, demandez les conseils de Kevin! C'est un expert!",
  ];
  
  // Changer au 3 secondes 
  setInterval(function () {
    let index_commentaires = rand(0, tableau_commentaires.length - 1);
    let commentaire_pige = tableau_commentaires[index_commentaires];
  
    // Ajouter une classe CSS pour déclencher la transition
    p_commentaire.classList.add("fade-out");
    conteneur_commentaire.classList.add("fade-out");
  
    // Retarder la modification du contenu et la suppression de la classe pour permettre la transition
    setTimeout(function () {
      p_commentaire.innerHTML = commentaire_pige;
      p_commentaire.classList.remove("fade-out");
      conteneur_commentaire.classList.remove("fade-out");
    }, 500);
  
  }, 3000);
  