function convertir()
{   
    alert("hola");
    var letra = "";
    var mensaje = mensaje.concat(letra);

}

function mostrar()
{
    alert(mensaje)
}

function media(){
    var n1 =document.miform.n1.value;
    var n2 =document.miform.n2.value;
    var n3 =document.miform.n3.value;
    var media = (parseFloat(n1) + parseFloat(n2) + parseFloat(n3))/3;
    alert("La media es de : " + media);
}

function dados(){

    var n1 =Math.floor(Math.random() * 6);
    alert("El primer dado: " + n1);
    var n2 =Math.floor(Math.random() * 6);
    alert("El segundo dado: " + n2);

    if(n1 > n2){
        i ==n2;
    }
    for ( i = n2 ; i = n1; n2++) {
    var cuadrado = i*i;
    var resul =+ "Los cuadrados son" +
    cuadrado;
        
    }

    alert(cuadrado);
}
 function redondeo() {
    var cantidad = document.miform.cantidad.value;
    var precio = document.miform.precio.value;

    if(isNaN(cantidad) || isNaN(precio)){

        alert("deben  de ser valores numericos");
    }else{

    
    var redondeo = Math.round(precio * cantidad);
    alert("El precio redondeado es de :" + redondeo);
 }
 

}