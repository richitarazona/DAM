
    function longitud(){

        var cadena = document.miformulario.nombre.value;
        var resultado = "";
        var resultado =+ "La longitud de la cadena es de :" + cadena.length;
        alert(resultado);

    }

    function run(){

        var array_palabras = new Array();
        var num_palabras;
        var nueva_ventana;
        
        alert("HOLA"),
        array_palabras = document.getElementById("txt").value.split(" ");
        alert(array_palabras);
        num_palabras = array_palabras.length;
        
        for (let i = 0; i <= num_palabras; i++) {
           alert(array_palabras[i]);
            
        }
        }