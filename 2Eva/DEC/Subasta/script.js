function andarReloj() {
  setInterval("mostrar()", 1000);
}
function mostrar() {
  horaActual = new Date();
  hora = horaActual.getHours();
  minuto = horaActual.getMinutes();
  segundo = horaActual.getSeconds();
  momento = hora + ":" + minuto + ":" + segundo;
  miform.reloj.value = momento;
}

var arrayOfertas = [];

function añadirOfertas() {
  var nuevaOferta = document.miform.añadirOfertas.value;
  var opcionOferta = document.miform.createElement("opcionOferta");
  if (opcionOferta > arrayOfertas[arrayOfertas.length]) {
    arrayOfertas.add(opcionOferta);
  }
}

function contador(
    switch (key) {
        case value:
            
            break;
    
        default:
            break;
    }
)
