var spanAffich = document.querySelector('#affichage > span');

// -------------------- BOUTONS BASIQUES ----------------------

document.querySelector('#CE').addEventListener('click', function(){
    spanAffich.innerHTML = '0';
})
document.querySelector('#retour').addEventListener('click', function(){
    let longueur = spanAffich.innerHTML.length - 1;
    spanAffich.innerHTML = spanAffich.innerHTML.slice(0, longueur);
})

document.querySelector('#un').addEventListener('click', function(){
    String(spanAffich.innerHTML);
    spanAffich.innerHTML = spanAffich.innerHTML + '1';
})
document.querySelector('#deux').addEventListener('click', function(){
    String(spanAffich.innerHTML);
    spanAffich.innerHTML = spanAffich.innerHTML + '2';
})
document.querySelector('#trois').addEventListener('click', function(){
    String(spanAffich.innerHTML);
    spanAffich.innerHTML = spanAffich.innerHTML + '3';
})
document.querySelector('#quatre').addEventListener('click', function(){
    String(spanAffich.innerHTML);
    spanAffich.innerHTML = spanAffich.innerHTML + '4';
})
document.querySelector('#cinq').addEventListener('click', function(){
    String(spanAffich.innerHTML);
    spanAffich.innerHTML = spanAffich.innerHTML + '5';
})
document.querySelector('#six').addEventListener('click', function(){
    String(spanAffich.innerHTML);
    spanAffich.innerHTML = spanAffich.innerHTML + '6';
})
document.querySelector('#sept').addEventListener('click', function(){
    String(spanAffich.innerHTML);
    spanAffich.innerHTML = spanAffich.innerHTML + '7';
})
document.querySelector('#huit').addEventListener('click', function(){
    String(spanAffich.innerHTML);
    spanAffich.innerHTML = spanAffich.innerHTML + '8';
})
document.querySelector('#neuf').addEventListener('click', function(){
    String(spanAffich.innerHTML);
    spanAffich.innerHTML = spanAffich.innerHTML + '9';
})
document.querySelector('#zero').addEventListener('click', function(){
    String(spanAffich.innerHTML);
    spanAffich.innerHTML = spanAffich.innerHTML + '0';
})

document.querySelector('#plus').addEventListener('click', function(){
    String(spanAffich.innerHTML);
    spanAffich.innerHTML = spanAffich.innerHTML + '+';
})
document.querySelector('#moins').addEventListener('click', function(){
    String(spanAffich.innerHTML);
    spanAffich.innerHTML = spanAffich.innerHTML + '-';
})
document.querySelector('#fois').addEventListener('click', function(){
    String(spanAffich.innerHTML);
    spanAffich.innerHTML = spanAffich.innerHTML + '*';
})
document.querySelector('#divise').addEventListener('click', function(){
    String(spanAffich.innerHTML);
    spanAffich.innerHTML = spanAffich.innerHTML + '/';
})
document.querySelector('#virgule').addEventListener('click', function(){
    String(spanAffich.innerHTML);
    spanAffich.innerHTML = spanAffich.innerHTML + '.';
})

// -------------------- CALCUL DES RESULTATS ------------------

var resultat;

document.querySelector('#egale').addEventListener('click', function(){
    resultat = eval(spanAffich.innerHTML);
    spanAffich.innerHTML = resultat;
})

