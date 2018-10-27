<?php
/**
 * Created by PhpStorm.
 * User: Adrián
 * Date: 31.8.2018
 * Time: 7:58
 */

class ContactController extends Controller
{
    public function process($parameters)
    {
        $this->header = array(
            'title' => 'Kontaktní formulář',
            'key_words' => 'kontakt, email, formulář',
            'description' => 'Kontaktní formulář našeho webu.'
        );
        $this->view = 'contact';
    }

    public function addUser() {
        $conn = new Db();
        $conn->createConn();
        $conn->insertUser('Adko', 'TazkeHeslo');
        $this->redirect('error');
    }

}