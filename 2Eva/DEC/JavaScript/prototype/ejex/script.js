function sumar() {
  var suma = 0;
  for (let i = 0; i < this.length; i++) {
    suma += this[i];
  }
} //sumar

function escribir() {
  for (let i = 0; i < this.length; i++) {
    document.write(this[i]);
  }
}
