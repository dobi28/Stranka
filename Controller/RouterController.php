<?php
/**
 * Created by PhpStorm.
 * User: Adrián
 * Date: 30.8.2018
 * Time: 12:35
 */

class RouterController extends Controller
{
    protected $controller;


    public function process($parameters)
    {
        $parsedURL = $this->parseURL($parameters[0]);
        if (empty($parsedURL[0]))
        {
            $this->redirect('clanok/uvod');
        }


        $controllerClass = $this->transformURL(array_shift($parsedURL)) . 'Controller';

        if (file_exists('Controller/' . $controllerClass . '.php'))
        {
            $this->controller = new $controllerClass;
        }
        else
        {
            $this->redirect('error');
        }

        if(isset($parsedURL[1])) {
            $this->controller->{$parsedURL[0]}($parsedURL[1]); //ak ma parameter to znamena, ze ma aj metodu
        } elseif(isset($parsedURL[0])) {
            $this->controller->{$parsedURL[0]}(); // ak ma iba metodu tak zavolam tu
        } else {
            $this->controller->process($parsedURL); //inak volam len process daneho controllera
            $this->data['title'] = $this->controller->header['title'];
            $this->data['description'] = $this->controller->header['description'];
            $this->data['key_words'] = $this->controller->header['key_words'];

            $this->view  = 'layout';
        }


    }

    private function parseURL($url) //parsuje nam url, oddeli / a aj medzere keby tam boli
    {
        $parsedURL = parse_url($url);
        $parsedURL["path"] = ltrim($parsedURL["path"], "/");
        $parsedURL["path"] = trim($parsedURL["path"]);
        $devidedPath = explode("/", $parsedURL["path"]); // vyslednu cestu si rozdelime podla lomitiek

        return $devidedPath;
    }

    // nazov kontroleru v URL je iny ako nazov jeho class preto musime transformovat
    private function transformURL($text)
    {
        $sentence = str_replace('-', ' ', $text);
        $sentence = ucwords($sentence);
        $sentence = str_replace(' ', '', $sentence);
        return $sentence;
    }
}