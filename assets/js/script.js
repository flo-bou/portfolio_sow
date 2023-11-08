// ======== Intersection observer =========

const animOption = {
    root: null, // cible le viewport
    rootMargin: '0px', //remplace par défaut par  0px 0px 0px 0px
    threshold: [0.4] // ou sous forme de tableau [0.5], array par défaut de toute façon
};
const animCallback = function(entries, animObserver) {
    entries.forEach(function (entry) {
        if (entry.isIntersecting) { // quand l'élément devient visible
            entry.target.classList.remove('not-visible')
            entry.target.classList.add('visible')
            // animObserver.unobserve(entry.target)
        } 
        else {
            entry.target.classList.remove('visible')
            entry.target.classList.add('not-visible')
        }
    });
};
const animObserver = new IntersectionObserver(animCallback, animOption);

const elementsToSlide = document.querySelectorAll('.slide, h2, .card, .form-group');
elementsToSlide.forEach(
    function (elementToSlide) {
        elementToSlide.classList.add('not-visible') //on met en nonvisible par défaut
        animObserver.observe(elementToSlide) // on indique à l'objet IntersectionObserver ce qu'il doit observer
    }
);

// ************* TOAST *************

const toastContainer = document.getElementById('toast-container');
function addToast(mailerResponse) {
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
    let newToast = `
        <div class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header bg-${toastColor} text-white">
                <strong class="mr-auto">${toastHeader}</strong>
                <button type="button" class="ml-2 mb-1 close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                ${toastBody} <br>
            </div>
        </div>`;

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

document.getElementById('theForm').addEventListener(
    'submit', 
    ev => {ev.preventDefault();}
);

// ****************  AJAX MAIL SENDER  **************

function ajaxMailSender() {

    let formData = 'Sendmail=' + document.getElementById("Sendmail").value;
    formData += '&name=' + document.getElementById("name").value;
    formData += '&email=' + document.getElementById("email").value;
    formData += '&message=' + document.getElementById("message").value;
    formData += '&norobot=' + document.getElementById("norobot").checked;
    formData = encodeURI(formData);


    // if (this.status == 200){
    //     addToast(serverResponse);
    // } else {
    //     addToast('FailXhrResponse');
    // }
}
