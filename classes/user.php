<?php

require('interfaces/UserInterface.php');

class user implements UserInterface
{

    private $request;

    public function __construct() {
        $this->getRequest($_REQUEST);
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getRequest($request) {

    }

    public function parseRequest() {

    }
}