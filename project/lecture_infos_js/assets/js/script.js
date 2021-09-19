let randNb = Math.floor(Math.random() * 50); // pour 50 possibilités
// let stringNb = randNb.toString();

let theCount = document.querySelector('p#count');
theCount.textContent = randNb;

document.querySelector('button#plus').addEventListener('click', function(){
    randNb = randNb + 1;
    theCount.textContent = randNb;
});

document.querySelector('button#moins').addEventListener('click', function(){
    randNb = randNb - 1;
    theCount.textContent = randNb;
});