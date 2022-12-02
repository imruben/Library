<?php

namespace App;

final class Request
{
    protected $controller;
    protected $action;
    protected $method;
    protected $params;
    protected $arrURI;

    function __construct()
    {
        $reqString = htmlentities($_SERVER['REQUEST_URI']);
        $this->arrURI = explode('/', $reqString);
        array_shift($this->arrURI);
        //var_dump($this->arrURI);
        $this->extractURI();
        // var_dump($this->controller);
        // var_dump($this->action);
        // die;
    }
    private function extractURI(): void
    {
        $length = count($this->arrURI);
        //estudi de casos possibles
        switch ($length) {
            case 1: //only controller
                if ($this->arrURI[0] == "") {
                    //$this->setController($this->arrURI[0]);
                    $this->setController('home');
                } else {
                    $this->setController($this->arrURI[0]);
                }
                $this->setAction('index');
                break;
            case 2: //controller & action
                $this->setController($this->arrURI[0]);
                if ($this->arrURI[1] == "") {
                    $this->setAction('index');
                } else {
                    $this->setAction($this->arrURI[1]);
                }
                break;
            default: // cont. & act & params
                $this->setController($this->arrURI[0]);
                $this->setAction($this->arrURI[1]);
                //$this->Params();
                break;
        }
        $this->setMethod(\htmlentities($_SERVER['REQUEST_METHOD']));
    }
    public function getController()
    {
        return $this->controller;
    }
    public function setController($controller)
    {
        $this->controller = $controller;
    }
    public function getAction()
    {
        return $this->action;
    }
    public function setAction($action)
    {
        $this->action = $action;
    }
    public function getMethod()
    {
        return $this->method;
    }
    public function setMethod($method)
    {
        $this->method = $method;
    }
    public function getParams()
    {
        return $this->params;
    }
    public function setParams($params)
    {
        $this->params = $params;
    }
}
