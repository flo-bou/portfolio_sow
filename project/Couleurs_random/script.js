function getRndHexDigit(){
    let randNb = Math.floor(Math.random() * 16);

    if (randNb==10){
    return "A";
    } 
    else if (randNb==11){
        return "B";
    }
    else if (randNb==12){
        return "C";
    }
    else if (randNb==13){
        return "D";
    }
    else if (randNb==14){
        return "E";
    }
    else if (randNb==15){
        return "F";
    }
    else {
        return randNb.toString();
    }

//     switch(randNb){
//         case(10) :return "A";
//             break;
//         case(11) :return "B";
//             break;
//         case(12) :return "C";
//             break;        
//         case(13) :return "D";
//             break;        
//         case(14) :return "E";
//             break;
//         case(15) :return "F";
//             break;
//         default :return randNb.toString();
//     }
}

function getRndColor(){
    let color = "#"
    for (let i = 1; i <= 6; i++) {
        let hexDigitTemp = getRndHexDigit();
        color = color.concat(hexDigitTemp);
    }
    return color;
}

var spanFond = document.querySelector('span#currentColor');
var bodyStyle = document.querySelector('body').style; // on choppe le body style
var rndButton = document.querySelector('button[id=rndColor]'); // on choppe le bouton

rndButton.addEventListener('click', function(){
    let couleur = getRndColor();
    bodyStyle.backgroundColor = couleur;
    spanFond.innerHTML = couleur;
});

var setButton = document.querySelector('button[id=setColor]');
var theInput = document.querySelector('input[id=enterColor]');

setButton.addEventListener('click', function(){
    let couleur = theInput.value;
    bodyStyle.backgroundColor = couleur;
    spanFond.innerHTML = couleur;
});









