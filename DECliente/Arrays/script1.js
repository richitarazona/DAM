
function calculaGasto(){

    var gasto = document.miform.gasto.value.parseFloat;
    var gasto1T;
    var gasto2T;
    var gasto3T;
    var gasto4T;
    var gastoAcumulado1T;
    var gastoAcumulado2T;
    var gastoAcumulado3T;
    var gastoAcumulado4T;
    var trimestre = document.miform.trimestre.value;
    switch (trimestre) {
        case "1T":
            gasto1T += gasto;
            break;
        case "2T":
            gasto2T += gasto;
            break;
        case "3T":
            gasto3T += gasto;
            break;
        case "4T":
            gasto4T += gasto;
            break;}//swicht


    gastoAcumulado1T +=gasto1T;
    gastoAcumulado2T +=gasto2T;
    gastoAcumulado3T +=gasto3T;
    gastoAcumulado4T +=gasto4T;}

    function sumarGasto(){

        alert("El gasto ha sido de :" + "<br>" +
        gastoAcumulado1T + "euros" + " en el 1 Trimestre"
        );
        alert("El gasto ha sido de :" + "<br>" +
        gastoAcumulado2T + "euros" + " en el 2 Trimestre"
        );
        alert("El gasto ha sido de :" + "<br>" +
        gastoAcumulado3T + "euros" + " en el 3 Trimestre"
        );
        alert("El gasto ha sido de :" + "<br>" +
        gastoAcumulado4T + "euros" + " en el 4 Trimestre"
        );
    }