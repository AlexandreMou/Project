/* $(document).ready(function(){
    $('.dropdown-toggle').click(function(){
        $('.dropdown-menu').stop(true,true).slideToggle(200);
    });
}); */

class Offre {
    constructor(titre, description,typeContrat,dateDebut,nbExperience,fonction,secteur,typeEntreprise,modeTravail,dateLimite) {
      this.titre = titre;
      this.description = description;
      this.typeContrat = typeContrat;
      this.dateDebut = dateDebut;
      this.nbExperience = nbExperience;
      this.description = description;
      this.fonction = fonction;
      this.secteur = secteur;
      this.typeEntreprise = typeEntreprise;
      this.modeTravail = modeTravail;
      this.dateLimite = dateLimite;
    }
  }


var offre1 = new Offre(
              "Developpeur web",
              "lzezfejkfzkejfkzefkzjekfezkfzefjzekj",
              "CDI",
              "01/03/2021",
              "2 ans",
              "XXXX",
              "Technologie",
              "PME",
              "Télétravail ponctuel",
              "02/02/2021"
              
);


var lesOffres = []
lesOffres.push(offre1)
lesOffres.push(offre1)

console.log(lesOffres)