<?php

class Utilidades  
{
    public static function sanearDatos($dato)
    {
        return htmlspecialchars($dato, ENT_QUOTES, 'UTF-8');
    }
}
