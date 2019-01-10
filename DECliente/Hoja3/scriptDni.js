function validar() {
  var letras = "TRWAGMYFPDXBNJZSQVHLCKE";
  var cod = "";

  cod = miformulario.numero.value % 23;
  /* console.log(cod);
  console.log(letras.charAt(cod)); */

  if (letras.charAt(cod) == miformulario.letra.value.toUpperCase()) {
    alert("DNI correcto");
  } else {
    alert("DNI incorrecto");
    miformulario.numero.focus();
  }
}
