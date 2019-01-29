function azar() {
  var aleatorio;
  var mayor = 0;

  var lista = new Array(6);
  for (var i = 0; i < 6; i++) {
    aleatorio = Math.random() * (49 - 1) + 1;
    if (aleatorio > mayor) {
      aleatorio = mayor;
      lista.push(aleatorio);
    }
  }
  alert(lista);
}

function medias() {





}

function añadirAlumno
