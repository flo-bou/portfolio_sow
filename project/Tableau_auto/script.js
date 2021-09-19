function newTab(parent){
    let nbRow = 5;
    let nbCol = 4;

    let tableElm = document.createElement("table");
    parent.appendChild(tableElm);
    for (let j = 1 ; j <= nbRow; j++){
        if (j == 1){
            var thead = document.createElement("thead");
            tableElm.appendChild(thead);
            var ligne = document.createElement("tr");
            ligne.setAttribute("id", "row"+j);
            thead.appendChild(ligne);
        } else if (j == 2){
            var tbody = document.createElement("tbody");
            tableElm.appendChild(tbody);
            var ligne = document.createElement("tr");
            ligne.setAttribute("id", "row"+j);
            tbody.appendChild(ligne);
        } else{
            var ligne = document.createElement("tr");
            ligne.setAttribute("id", "row"+j);
            tbody.appendChild(ligne);
        }
        for (let k = 1 ; k <= nbCol ; k++){ //création des cellules
            if (j == 1){
                var colonne = document.createElement("th");
            } else {
                var colonne = document.createElement("td");
            }
            colonne.setAttribute("id", "row"+j+"-col"+k);
            colonne.textContent = "-";
            ligne.appendChild(colonne);
            console.log(colonne);
        }
    }
}

// function expandTab(tableau){

// }

function fillTab(){
    ligne0 = ["Ville", "Pays", "Nombre d\'habitants", "Langue"];
    ligne1 = ["Londres", "Angleterre", "13 millions", "affreuse"];
    ligne2 = ["Paris", "France", "12 millions", "français"];
    ligne3 = ["Maubeuge", "Là-bas", "Indéterminé", "patois"];
    ligne4 = ["Madrid", "Espagne", "Beaucoup", "spanish"];
    cont = [ligne0, ligne1, ligne2, ligne3, ligne4];

    for (let li = 1 ; li<=5 ; li++){
        for (let co = 1 ; co<=4 ; co++){
            document.getElementById("row"+li+"-col"+co).innerHTML = cont[li-1][co-1];
        }
    }
}

// function trierTab(tableau){

// }

function styliserTab(){
    document.querySelector('section > table').classList.add("table", "table-hover", "table-striped", "table-light", "border");
    document.querySelector('section > table > thead').classList.add("thead-dark");
}

function tropStyliserTab(){

}

function formater(srcParent, formatedParent){
    let arrayFromStrings = srcParent.innerHTML.split("");

    for (let afs = 0 ; afs < srcParent.innerHTML.length ; afs++){
        if (arrayFromStrings[afs] === "<"){
            arrayFromStrings[afs] = "&lt;";
        } else if (arrayFromStrings[afs] === ">"){
            arrayFromStrings[afs] = "&gt;";
        }
    }
    let newString = "";
    for (let compt = 0 ; compt < arrayFromStrings.length ; compt++ ){ // tranforme l'array en string
        newString = newString + arrayFromStrings[compt];
    }
    formatedParent.innerHTML = newString;
}

let theButton = document.getElementById('theButton');
let theSection = document.getElementById('parent');
let theCode = document.querySelector('pre > code');

let i = 0;

theButton.addEventListener('click', function(){
    if (i == 0){
        // créer un tableau
        theSection.innerHTML = " ";
        newTab(theSection);
        theButton.innerHTML ="Remplissons-le !";
    }
    // else if (i == 1){
    //     //ajouter des lignes ou colonnes 
    //     expandTab(theTab);
    //     theButton.innerHTML ="Remplissons-le !";
    // }
    else if (i == 1){
        //remplir le tableau
        fillTab();
        theButton.innerHTML ="Rendons-le beau.";
    }
    // else if (i == 2){
    //     //trier le tableau
    //     trierTab(theTab);
    //     theButton.innerHTML ="Rendons-le beau.";
    // }
    else if (i == 2){
        // ajouter du style
        styliserTab();
        theButton.innerHTML ="Encore plus de style !";
    }
    else if (i == 3){
        // ajouter trop de style
        tropStyliserTab();
        theButton.innerHTML ="Oups ! Supprimons ça.";
    }
    else if (i == 4){
        // supprimer le tableau
        theSection.innerHTML = '<p> Ouf, ça va mieux. <p>';
        theButton.innerHTML ="Créons-en un nouveau !";
        i = -1;
    }
    else{
        //ajoute un message d'erreur de fin avant de remettre i à 0
        theSection.innerHTML = "<p> Oups quelque chose n'a pas marché :-( <p>";
        theButton.innerHTML = "Réessayons.";
        i = -1;
    }

    formater(theSection, theCode);

    i = i + 1;
    // mettre à jour la section de code
})
