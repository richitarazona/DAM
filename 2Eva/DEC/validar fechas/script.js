var ExpReg = /^([0][1-9]|[12][0-9]|3[01])(\/|-)([0][1-9]|[1][0-2])\2(\d{4})$/;
var meses = [
  "ENERO",
  "FEBRERO",
  "MARZO",
  "ABRIL",
  "MAYO",
  "JUNIO",
  "JULIO",
  "AGOSTO",
  "SEPTIEMBRE",
  "OCTUBRE",
  "NOVIEMBRE",
  "DICIEMBRE"
];
var dias = ["dom", "lun", "mar", "mie", "jue", "vie", "sab"];
var valido = false;

function validar() {
  var fecha = document.miform.fecha.value;
  var resul = ExpReg.test(fecha);
  if (resul == true) {
    alert("La fecha es correcta");
    valido = true;
  } else {
    alert("La fecha es incorrecta");
    valido = false;
  }
  alert(valido);
}

function mostrar() {
  var fecha = document.miform.fecha.value;
  var fechaf = fecha.split("/");
  var day = fechaf[0];
  var month = fechaf[1];
  var year = fechaf[2];
  var date = new Date(year, month - 1, day);
  numeroDia = date.getDay();
  var diaseleccionado = dias[numeroDia]
  alert(numeroDia);
  document.miform.fechafinal.value = date;
}
