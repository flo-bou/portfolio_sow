let f = document.getElementById('foo');
document.addEventListener('click', function(ev){
    f.style.transform = 'translateY('+(ev.clientY-275)+'px)'; /* on modifie la propriété css transform */
    f.style.transform += 'translateX('+(ev.clientX-425)+'px)'; /* string+valeur+strnig */
},false);