// ======== Navbar toggle =========


// ======== Intersection observer =========

const animOption = { //options est un object littéral contenant les options à passer à l'objet IntersectionObserver
    root: null, // cible le viewport
    rootMargin: '0px', //remplace par défaut par  0px 0px 0px 0px
    threshold: [0.4] // ou sous forme de tableau [0.5], array par défaut de toute façon
}
let animCallback = function(entries, animObserver) {// On crée et exécute immédiatement cette fonction
    entries.forEach( // on applique à toutes les cibles/entrées
        function (entry) {// entry est un prete-nom
            // console.log('trigger')
            if (entry.isIntersecting) { // L'élément devient visible
                entry.target.classList.remove('not-visible')
                entry.target.classList.add('visible')
                // animObserver.unobserve(entry.target)
            } else{
                entry.target.classList.remove('visible')
                entry.target.classList.add('not-visible')
            }
        }
    );
};

const animObserver = new IntersectionObserver(animCallback, animOption); // on crée un objet IntersectionObserver avec pour argument le return de la fonction callback et l'objet options

const elementsToSlide = document.querySelectorAll('.slide, h2, .card, .form-group');
elementsToSlide.forEach(
    function (elementToSlide) {
        elementToSlide.classList.add('not-visible') //on met en nonvisible par défaut
        animObserver.observe(elementToSlide) // on indique à l'objet IntersectionObserver ce qu'il doit observer
    }
);

// ************* TOAST *************

const toastContainer = document.getElementById('toast-container');

//code d'activation des toasts

// addToast ne doit être exécutée que lorsque la réponse finale du serveur a bien été envoyée
function addToast(mailerResponse) { // parameter is  the return value of sendmail file
    let toastHeader, toastBody, toastColor;
    switch (mailerResponse){
        case('Success') :
            toastHeader = 'Et hop !';
            toastColor = 'success';
            toastBody = 'Le message a bien été envoyé.';
            break;
        case('FailXhrResponse') :
            //écrire erreur dans fichier
            toastHeader = 'Oups !';
            toastColor = 'warning';
            toastBody = 'Le formulaire n\'a pas envoyé vos informations correctement.';
            break;
        case('FailMailService') : // mail service error
            //écrire erreur dans fichier
            toastHeader = 'Oups !';
            toastColor = 'warning';
            toastBody = 'Le service mail n\'a pas fonctionné.';
            // toastBody += '<br>' + mailerResponse;
            break;
        case('FailAntiRobot') :
            //écrire erreur dans fichier
            toastHeader = 'Mince !';
            toastColor = 'warning';
            // toastBody = 'Le captcha n\'a pas été validé.';
            toastBody = 'Vous avez oublié de cochez la case anti-robots.';
            // toastBody += '<br>' + mailerResponse;
            break;
        case('NoAntiRobot') :
            //écrire erreur dans fichier
            toastHeader = 'Oups !';
            toastColor = 'warning';
            // toastBody = 'Le captcha n\'a pas été envoyé.';
            toastBody = 'Quelque chose n\'a pas fonctionné avec la case anti-robots.';
            // toastBody += '<br>' + mailerResponse;
            break;
        case('FailForm') : // html form error
            //écrire erreur dans fichier
            toastHeader = 'Oups !';
            toastColor = 'warning';
            toastBody = 'Le formulaire n\'a pas envoyé vos informations correctement.';
            break;
        default :
            //écrire erreur dans fichier
            toastHeader = 'Mince !';
            toastColor = 'warning';
            toastBody = 'La réponse du serveur est inattendue.';
            // toastBody += '<br>' + mailerResponse;
            break;
    }
    let newToast = '<div class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">';
    newToast += '<div class="toast-header bg-' + toastColor + ' text-white"><strong class="mr-auto">' + toastHeader + '</strong><button type="button" class="ml-2 mb-1 close" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
    newToast += '<div class="toast-body">' + toastBody + '<br></div>';
    newToast += '</div>';

    toastContainer.innerHTML += newToast;
    // toastContainer.classList.remove('d-none');

    let lastToast = toastContainer.lastElementChild;
    lastToast.classList.remove('hide');
    lastToast.classList.add('showing');

    document.querySelectorAll('#toast-container div.toast').forEach(
    // toastContainer.querySelectorAll('div.toast').forEach(
        function(aToast){
            // console.log('avant sélection');
            aToast.querySelector('button.close').addEventListener('click', function(){
                // console.log('après sélection');
                aToast.classList.remove('showing');
                aToast.remove();
            });
        }
    );
}

// ***************  NO HTTP REQUEST FROM HTML PAGE  **************

const theForm = document.getElementById('theForm');
theForm.addEventListener('submit', event => {
  event.preventDefault();
//   console.log('Http submission cancelled.');
});

// ****************  AJAX MAIL SENDER  **************

function ajaxMailSender() {

    //************** GET HTML FORM DATA ************

    // function htmlFormData() {
        //fonction de vérification des champs du formulaire
        let formData = 'Sendmail=' +  document.getElementById("Sendmail").value;
        formData += '&name=' + document.getElementById("name").value;
        formData += '&email=' + document.getElementById("email").value;
        formData += '&message=' + document.getElementById("message").value;
        formData += '&norobot=' + document.getElementById("norobot").checked;// renvoie un booléen

        // console.log(document.getElementById("norobot").checked);
        // console.log(formData);
        formData = encodeURI(formData);
        // console.log(formData);

    //     return encodeURI(formData);
    // };

    // ***************  SEND FORM DATA TO SERVER AND THEN CHANGE DOM  **************
    let serverResponse;
    let formRequest = new XMLHttpRequest();
    // console.log('after new XMLHttpRequest');
    formRequest.onreadystatechange = function () { // for each state of the request // on défini avant de lancer la requête les instructions qu'on veut executer durant les différents étapes de celle-ci.
        if (this.readyState == 4) { // quand le serveur renvoie ces paramètres, le fichier serveur a correctement fini l'ensemble de ses instructions (quel que soit le résultat de celles-ci)
        serverResponse = this.responseText;
        console.log('Status de la requête : ' + this.statusText);
            if (this.status == 200){
                addToast(serverResponse);
            } else {
                addToast('FailXhrResponse');
            }
            // console.log('réponse du serveur : ' + serverResponse);
        } else{
            // console.log('Requête pas encore finie : étape ' + this.readyState);
        }
    }; // fin de la fonction onreadystatechange

    let sendmailAddress = (window.location.hostname == 'florent-b.schoolofweb.tech') ? ('/Mailer/_Sendmail.php') : ('/Florent_B/Mailer/_Sendmail.php');

    formRequest.open("POST", sendmailAddress, true); // le deuxième paramètre est l'adresse (relative) d'un fichier sur le serveur. Ce fichier peut être un fichier de script serveur comme php ou asp mais peut aussi être de n'importe que autre type (comme txt ou xml par exemple)
    formRequest.setRequestHeader('Content-type', 'application/x-www-form-urlencoded'); // header pour un formulaire. Application signifie données binaires, x-www-form-urlencoded signifie un formulaire html
    formRequest.send(formData); // je dois envoyer les données du formulaire html
};

document.querySelector('#contact button#envoi').addEventListener('click', () => {
    ajaxMailSender();
});