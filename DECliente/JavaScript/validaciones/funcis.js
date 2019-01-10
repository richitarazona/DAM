function validar() {
  if (document.form.nombre.value == "") {
    var mensaje = "";
    mensaje += "\nDebe introducir Nombre \n";
  }
  if (document.form.apellidos.value == "") {
    mensaje += "Debe introducir apellidos\n";
  }
  if (document.form.pais.value == "") {
    mensaje += "Debe introducir pais\n";
  }
  if (document.form.preferencias.value == "") {
    mensaje += "Debe introducir alguna preferencia\n";
  }

  alert(mensaje);
}

function mostrar() {
  var mensaje = "";
  mensaje +=
    "has seleccionado: \n Nombre: " +
    document.form.nombre.value +
    "  \n Apellidos:  " +
    document.form.apellidos.value +
    "  \n Pais:  " +
    document.form.pais.value +
    "  \n Sexo:  " +
    document.form.sexo.value;
  mensaje += "\n Aficiones:";

  for (i = 0; i < document.form.preferencias.length; i++) {
    if (document.form.preferencias[i].checked) {
      mensaje += " * " + document.form.preferencias[i].value;
    }
  }
  alert(mensaje);
}
//mostrar
