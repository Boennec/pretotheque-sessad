Définir les tables de la bdd : articles - catégorieArticles - partenaire - réservation
architecture du site :
importer bootstrap dans 2 dossiers css et js
dossier image
fichier index.php qui sera la page d'accueil 
articles.php
reservation.php
partenaire.php
charte.php

Créer 2 fichiers header.php et footer.php

sur getbootstrap.com/docs/5.1/examples/sticky-footer-navbar, reccupérer le code source. Coller dans index.php
créer un fichier style.css pour le padding

organiser les pages en blocs pour séparer les éléments avec la fonction php include_once

Rendre les liens actifs sur la navbar
Intégrer  la datatable jquery, pour afficher les données correctement

Sur la page partenaires, créer le tableau thead - tr td et faire une boucle while() pour afficher le contenu du tableau.
Créer avec bootstrap dans 2 nouvelles colonnes du tableau, les boutons modifier , supprimer.
Créer au dessus du tableau un bouton nouveau partenaire. Rendre le bouton actif avec un href qui renvoit vers la page ajoutPartenaire.php. 
Créer un fichier ajoutPartenaire.php. 

CRUD :
 - INSERT : Dans  ajoutPartenaire.php, créer le formulaire, puis ecrire la requete INSERT INTO, avec $pdostmt=$pdo->prepare($query); puis $pdostmt->execute.

 Après l'ajout d'un partenaire on redirige vers la page des partenaires avec header("Location:partenaire.php").
 - DELETE : Dans partenaire permettre la suppression d'un partrenaire avec un pop up associé et rediriger vers partenaire.php et requete DELETE pour mettre a jour la bdd. 

 - UPDATE : pour modifier une ligne de la bdd : lors du clic sur le button update, il faut rediriger vers modifPartenaire.php, page de modification qui reccupére les données de l'id correspondant pour être modifié. Puis, lorsque l'utilisateur procede à la modification partielle ou complete de la ligne correspondant à l'id sélectionné, il faudra procéder à l'UPDATE au moment du clic de modification.
 Puis l'utilisateur sera redirigé vers partenaire.php.
Pour reccupérer l'id correspondant, on utilise l'input de type hidden. Il sera un input invisible sur le form. Il contiendra le id du partenaire correspondant réccupéré dans la première phase.

