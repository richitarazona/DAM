function validar(nombre) {
  var correcto = false;
  var nombres = ["Javier", "Mario", "Ricardo", "Pedro", "Juan"];
  var passwords = ["Javier19", "Mario19", "Ricardo19", "Pedro19", "Juan19"];

  for (i = 0; i < nombres.length; i++) {
    if (
      myform.nombre.value == nombres[i] &&
      myform.password.value == passwords[i]
    ) {
      correcto = true;
      break;
    }
  }

  if (correcto) {
    alert("Usuario correcto");
  } else {
    alert("Usuario incorrecto");
  }
}
