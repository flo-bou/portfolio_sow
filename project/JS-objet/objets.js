
// création d'un objet
document.write("<h2>Création d'un objet </h2>");

function affMaitre(){
    document.write("Ce maitre s'appelle ", this.nom, ", c'est un ", this.metier, " venant de ", this.pays, ".<br>");
}
function Maitre(txtNom, txtPays, txtMetier){
    this.nom=txtNom;
    this.pays=txtPays; 
    this.metier=txtMetier; 
    this.print=affMaitre;
}

var maitreLuckyL = new Maitre("Lucky Luke", "USA", "Cowboy");
maitreLuckyL.print();

function affChien(){
    document.write("Ce chien s'appelle ", this.nom, ", c'est un ", this.race, " et il appartient à ", this.maitre.nom, ".<br>");
}
function Chien(txtNom, txtRace, objMaitre){ //on donne un nom descriptif du type au paramètre
    this.nom=txtNom;
    this.race=txtRace;
    this.maitre=objMaitre; // on donne un nom simple à ce paramètre
    this.print=affChien; //ceci est une méthode, l'appel de la propriété print sera égale à la variable affChien
}

var chienRantanplan = new Chien("Rantanplan", "berger allemand", maitreLuckyL);
chienRantanplan.print();

maitreLuckyL.pays = "Belgique"; // on change la valeur de telle propriété
maitreLuckyL.print(); // = maitreLuckyL.print;
chienRantanplan.maitre.print(); // = maitreLuckyL.print;

// affichage du type de variable
document.write("<h2>affichage du type de variable </h2>");

document.write("chienRantanpan = ", chienRantanplan, "<br>"); // affiche chienRantanplan = [object Object]
document.write("typeof chienRantanpan = ", typeof(chienRantanplan), "<br>"); // = object

// création d'un pointeur
document.write("<h2>Création d'un pointeur </h2>");

maitreLuckyL.nom = "Lucky Luke";//réinitialisation
maitreLuckyL.pays = "USA";
maitreLuckyL.metier = "Cowboy";

var maitreCopie = maitreLuckyL; // ici maitreCopie n'est pas une nouvelle instance de Maitre (car pas de new) mais donc un pointeur vers maitreLuckyL 
// maitreCopie partage-il la même adresse mémoire que matreLuckyL? est-il un alias ?
maitreLuckyL.print();
maitreCopie.print();
document.write(typeof maitreCopie, "<br>");

for (let truc in maitreLuckyL){
    document.write(typeof truc, " | ", truc, " = ", maitreLuckyL[truc], "<br>");
};

for (let truc2 in maitreCopie){
    document.write(typeof truc2, " | ", truc2, " = ", maitreCopie[truc2], "<br>");
};

maitreCopie.nom = "Joe";
maitreCopie.print();// affiche Joe
maitreLuckyL.print();// affiche Joe aussi

maitreLuckyL.nom = "Jolly Jumper";
maitreLuckyL.print();// affiche Jolly Jumper
maitreCopie.print();// affiche Jolly Jumper aussi

document.write("Affichage du type de 'maitreCopie.' : ", typeof(maitreCopie), "<br>");  // affiche
document.write("Affichage du type de 'maitreCopie.nom' : ", typeof(maitreCopie.nom), "<br>");  // affiche

//Réinitialisation
document.write("<h2>Réinitialisation </h2>");

maitreLuckyL.nom = "Lucky Luke";
maitreLuckyL.pays = "USA";
maitreLuckyL.print();

// Copie d'objet plus propre
document.write("<h2>Copie d'un objet </h2>");
var maitreCopie2 = new Maitre(maitreLuckyL.nom, maitreLuckyL.pays, maitreLuckyL.metier); // chaque paramètre est copié à l'instant T
// ci dessus, on affecte LA VALEUR DES PROPRIETES à ce moment et non le nom de ces propriétés (ni un pointeur vers ces prorpiétés)
maitreLuckyL.print();// affiche Lucky Luke
maitreCopie2.print();// affiche Lucky Luke
document.write("<br>");

maitreLuckyL.pays = "Belgique";
maitreLuckyL.print();// affiche Belgique
maitreCopie2.print();// affiche USA , oui car la valeur de la propriété a été donnée et non la propriété elle-même
document.write("<br>");

maitreCopie2.nom = "Joe";
maitreCopie2.print();// affiche Joe
maitreLuckyL.print();// affiche Lucky Luke
document.write("<br>");

maitreLuckyL.nom = "Jolly Jumper";
maitreLuckyL.print();// affiche Jolly Jumper
maitreCopie2.print();// affiche Joe, la valeur de maitreCopie2.nom est toujours le string "Joe"
document.write("<br>");


// Copie d'objet par une méthode
document.write("<h2>Copie d'objet par une méthode</h2>");
function Maitre2(txtNom, txtPays, txtMetier){// On définit différemment le constructeur pour ajouter une méthode.
	this.nom=txtNom;
	this.pays=txtPays;
	this.metier=txtMetier;
	this.print=affMaitre;
	this.copierVers=f_copierVers;
}

function f_copierVers(objMaitreReceveur){// cette fonction void envoie les valeurs des propriétés d'elle-même (this, à droite)(ici la fonction, mais dans la méthode, ça doit être l'objet maitre) vers les propriétés de l'objet en paramètre objMaitreReceveur
	objMaitreReceveur.nom=this.nom;
	objMaitreReceveur.pays=this.pays;
	objMaitreReceveur.metier=this.metier;
}

var maitreLuckyL = new Maitre2("Lucky Luke", "USA", "Cowboy"); //le contructeur a changé, on redéclare la variable
var maitreCopie3 = new Maitre2();
maitreCopie3.print(); // affiche (undefined à la place des valeurs) mais toutes les propriétés ne sont pas définies
maitreLuckyL.copierVers(maitreCopie3); 

maitreLuckyL.print();
maitreCopie3.print();
document.write("<br>");

maitreCopie3.nom = "Joe";
maitreCopie3.print();// affiche Joe
maitreLuckyL.print();// affiche Lucky Luke
document.write("<br>");

/*
document.write("<h2>Utilisation de méthodes</h2>");

function creerListe(){
    this.search="";
    this.nb=0;
    this.Add=ajouterItem;
    this.Afficher=afficherListe;
    this.MAJ=MAJListe;
    this.getNom=getNomListe;
}
function ajouterItem(item){
    this[this.nb]=item;
    this.nb++;
}
function afficherListe(){
    if (document.getElementById){
        document.write("<div> id=\"divPays\" style=\"\"></div>")
    }
}
function MAJListe(txt){
    var txtAff="";
    var nb=0;
    if (txt==""){

    }
}
*/






