function run() {
  var nombre = document.getElementById("nombre").value;
  var passwd = document.getElementById("passwd").value;
  var rptpasswd = document.getElementById("rptpasswd").value;
  var edad = parseInt(document.getElementById("edad").value);
  var coche = document.getElementsByName("vehiculo");
  var banco = document.getElementById("bancos").value;
  var matricula = document.getElementById("matricula").value;
  var matriculaValida = false;
  var usuarios= [];
  var resultado = "";
  var cont = 0;
  var cajaTexto = "";
  
  if(exprematriculas = /(([A-Z]{1,2})(\d{4})([A-Z]{0,2}))/){
  alert("la matricula es un formato extraño")}
  else{
    alert("Es un formato valido");
  }
  //for
  if(edad < 0 || edad == "" ){
    alert("La edad no es correcta")
  }

  for (let i = 0; i < miform.vehiculo.length; i++) {
    if (miform.vehiculo[i].checked) {
      coche += miform.vehiculo[i].value;
    }
  } 
  var aficiones = "Tus aficiones son: <br>";
  for (let i = 0; i < miform.aficiones.length; i++) {
    if (miform.aficiones[i].checked) {
      aficiones += miform.aficiones[i].value + "<br>";
      cont ++;
    }
  } //for

  if(cont >1 & cont < 3){
    alert("Debes elegir entre 1 y 3 aficiones")
  }

  if(nombre == ""){
    alert("Debe introducir un nombre de usuario")
  }
  for (let i = 0; i < usuarios.length; i++) {
    if(nombre == usuarios[i]){
      alert("El usuario ya existe")
    }else{
      var x =document.getElementById("usuariosRegistrados");
      var option = document.createElement("option");
      option.text = nombre;
      x.add(option);
      cajaTexto += document.getElementById("cajaTexto").innerHTML = nombre;
    }
  
   
  }

  if(!passwd == rptpasswd){
    alert("La contraseña no es correcta")
  }
  if(banco == ""){
    alert("No ha seleccionado un banco")
  }
  resultado += "Datos: <br>" 
  resultado += "<hr>"
  resultado += "Hola " + nombre + "<br>";
  resultado += "Tu edad es de  " + edad + "<br>";
  resultado +=  "Posees coche " + coche + "<br>"
  resultado += " Matricula " + matricula + "<br>";
  resultado +=  aficiones + "<br>";
  resultado += "Modo de pago " + banco + "<br>";
  document.write(resultado);
  
    






  }

 //run
