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

      return $insert;
      //RequirePage::redirect('../client/list');
    }

    public function show($value){
      $client = new ModelClient;
      $selectId = $client->selectId($value);

      // echo $selectId['ville_id'];
      $ville = new ModelVille;
      $selectVille = $ville->selectId($selectId['ville_id']);
      $clientVille = $selectVille['nom'];
      
     return Twig::render('client-show.php', ['client' => $selectId, 'ville' => $clientVille]);
    
    }

}




