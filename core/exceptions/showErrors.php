<?php

class showErrors()
{
    public function ShowPage404()
    {
        header("HTTP/1.1 404 Not found"); 
        echo '404 page not foud!';
    }
}