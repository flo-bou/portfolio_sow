//     ___ALGO____
// cibles les élements code pre
// les mtrre dans un talbeau
// lire le tableau  et pour chacun  
// si html alors langage html
// si css alors lagngage css si rien alors ?


// boucle pour chopper tous les codes

// for (i = 0 ; )

let preCodes = document.querySelectorAll('div > pre > code');

// boucle pour chaque code de tel classe
for (let i in preCodes){
    preCode = preCodes[i];
    preCode.className = 'language-' + preCode.className;
}

// var anchors = document.getElementsByTagName('a');
// // Parcourez les ancres et ajoutez le gestionnaire de clics s'il inclut la classe CSS 'https'
// for ( var i in anchors ) {
//     if ( anchors[i].className && anchors[i].className.indexOf('https') != -1 ){
//         anchors[i].onclick = function () { 
//             return !window.open(this);
//         }
//     }
// }