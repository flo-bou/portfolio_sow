// let d21p = document.querySelector('#d21 > .btn-primary');

// d21p.addEventListener('click', function() {
// document.querySelector('#p21').style.display = 'block';
// });

// var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
// var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
//   return new bootstrap.Tooltip(tooltipTriggerEl)
// });

// --------------- ACTIVATION POPOVERS AVEC jS----------------

var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
});

// --------------- ACTIVATION POPOVERS AVEC jQUERY----------------
// $(document).ready(function(){
//     $('[data-toggle="popover"]').popover();
//     });

    // OU
    // $(function(){
    // $('[data-toggle="popover"]').popover()
    // });

// ------------------ Exercice 4-1 -----------------

// function ex41(){
//     let nbre = window.prompt('Entrez un nombre compris entre 1 et 10 svp.');
//     while (nbre < 0 || nbre > 10 || nbre == null){
//         nbre = window.prompt('Ce nombre n\'est pas compris entre 1 et 10. Réessayez');
//     }
//     document.getElementById('ex41').innerHTML += "<br>", nbre, " est bien compris entre 1 et 10";
// }

