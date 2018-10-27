<?php
/**
 * Created by PhpStorm.
 * User: Adrián
 * Date: 30.8.2018
 * Time: 15:00
 */

class errorController extends Controller
{
    public function process($parameters)
    {
        // Hlavička požadavku
        header("HTTP/1.0 404 Not Found");
        // Hlavička stránky
        $this->header['title'] = 'Chyba 404';
        // Nastavení šablony
        $this->view = 'error';
    }

}