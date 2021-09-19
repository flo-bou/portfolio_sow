var compteur = 5;
while(compteur>0){
    document.write("La variable compteur vaut ", compteur, ".<br>");
    compteur = compteur - 1;
}

// fonction pour mettre au pluriel (ajout de s final)
function getPluriel (nbr){
    if(nbr>1){
       return "s";
    }else{
        return"";
    }
}

var nbArticle = 10;
var nbCommande = 1;
document.write("<h3>Utilisation de la fonction getPluriel :</h3>");
document.write("Vous avez ", nbArticle, " article", getPluriel(nbArticle), ".<br>");
document.write("Vous avez ", nbCommande, " commande", getPluriel(nbCommande), ".<br>");

//variante de la fonction plurielle
function getPluriel2 (nbr, mot){
   var suffixe = "";
   if(nbr>1){
      suffixe = "s (remarquez la superbe utilisation du pluriel ici)";
   }
   return mot+suffixe; //l'addition de chaine de caractères les concatène
}

document.write("<h3>Utilisation de la fonction getPluriel2 :</h3>");
document.write("Vous avez ", nbArticle, " ", getPluriel2(nbArticle, "article"), ".<br>");
document.write("Vous avez ", nbCommande, " ", getPluriel2(nbCommande, "commande"), ".<br>");


document.write("<h3>Utilisation des littéraux de gabarit</h3>");
let x = 5;
let y = 50;

let newP = document.createElement('p');
document.appendChild(newP);

let theP = document.querySelector('p');

let simple = '\nx contient ' + x +
      '\ny contient ' + y + // \n pour revenir à la ligne dans le document
      '<br>Leur somme vaut ' + (x + y);

let grave = `\nx contient ${x}
      y contient ${y}
      Leur somme vaut ${x + y}`;
      //ci-dessus, tout le message est inclus dans une seule paire d'accents graves.
      //les retours à la ligne et les indentation/espaces sont aussi pris en compte dans cette notation. Ce texte sera donc noté avec la première ligne collée à gauche et les 2 suivantes décalés vers la droite.
    
let grave2 = `\nx contient ${x} \ny contient ${y} \nLeur somme vaut ${x + y}`;

let der = `x contient ${x}y contient ${y} \nLeur somme vaut ${x + y}`;

theP.innerHTML = simple + grave + grave2 + der;
// document.appendChild(theP);