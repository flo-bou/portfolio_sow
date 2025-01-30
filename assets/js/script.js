/* -------------------------------------------------------------------------- */
/*                            Animations de slides                            */
/* -------------------------------------------------------------------------- */

const animOption = {
    root: null, // cible le viewport
    rootMargin: '0px', //remplace par défaut par  0px 0px 0px 0px
    threshold: [0.4] // ou sous forme de tableau [0.5], array par défaut de toute façon
};
const animCallback = function(entries, animObserver) {
    entries.forEach(function (entry) {
        if (entry.isIntersecting) { // quand l'élément devient visible
            entry.target.classList.remove('not-visible');
            entry.target.classList.add('visible');
            // animObserver.unobserve(entry.target)
        } 
        else {
            entry.target.classList.remove('visible');
            entry.target.classList.add('not-visible');
        }
    });
};
const animObserver = new IntersectionObserver(animCallback, animOption);

const elementsToSlide = document.querySelectorAll('.slide-from-right, .slide-from-left');
elementsToSlide.forEach(
    function (elementToSlide) {
        elementToSlide.classList.add('not-visible'); // on met en nonvisible par défaut
        animObserver.observe(elementToSlide);
    }
);
