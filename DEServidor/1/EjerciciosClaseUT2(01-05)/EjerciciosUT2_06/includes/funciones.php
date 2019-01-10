<?php
    // fichero con funciones de ayuda (helpers)
    function verArray($array)
    {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
    
    function verArray2($array)
    {
        return "<pre>" . print_r($array, true) . "</pre>";
    }
?>
