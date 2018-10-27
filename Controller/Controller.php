<?php
/**
 * Created by PhpStorm.
 * User: Adrián
 * Date: 30.8.2018
 * Time: 12:10
 */

abstract class Controller
{
    protected $data = array(); //uklada data ziskane z modelu
    protected $view = ""; // nazov pohladu ktory sa vypise
    protected $header = array('title' => '', 'key_words' => '', 'description' => ''); //hlavicka html stranky

    abstract function process($parameters); //kontroler tu spracuje svoje parametre, kazdy  kontroler si ju sam implementuje

    public function showView()
    {
        if($this->view)
        {
            extract($this->data);
            require("View/" . $this->view . ".php");
        }
    }

    public function redirect($url)
    {
        header("Location: /$url");
        header("Connection: close");
        exit;
    }


}