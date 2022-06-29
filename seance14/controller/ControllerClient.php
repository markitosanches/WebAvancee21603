<?php
RequirePage::requireModel('CRUD');
RequirePage::requireModel('Client');
RequirePage::requireModel('Ville');

class ControllerClient{

    public function index(){

      return Twig::render('client-index.php');

    }

    public function list(){
        $client = new ModelClient;
        $select = $client->select();
        return Twig::render('client-list.php', ['clients' => $select]);
    }

    public function create(){
      $villes = new ModelVille;
      $villes = $villes->select('nom');
      return Twig::render('client-insert.php', ['villes'=> $villes]);
    }
    public function store(){
      $client = new ModelClient;
      $insert = $client->insert($_POST);
      RequirePage::redirect('../client/list');
    }

    public function show($value){

      return $value;
    
    }

}




