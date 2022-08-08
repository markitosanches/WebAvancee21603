<?php
RequirePage::requireModel('CRUD');
RequirePage::requireModel('Client');
RequirePage::requireModel('Ville');
RequirePage::requireLibrary('Validation');



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
      $validation = new Validation;
      //Array ( [nom] => Peter [adresse] => abc [phone] => 544878 [ville_id] => 1 [pays] => Canada ) 
      extract($_POST);
      $validation->name('nom')->value($nom)->pattern('alpha')->required()->max(30);
      $validation->name('adresse')->value($adresse)->pattern('alphanum')->max(45);
      $validation->name('phone')->value($phone)->pattern('tel')->max(20);
      $validation->name('ville_id')->value($ville_id)->pattern('int')->required();
      $validation->name('pays')->value($pays)->pattern('alpha')->max(20);
      //print_r($_POST);
      if($validation->isSuccess()){
        $client = new ModelClient;
        $insert = $client->insert($_POST);
        RequirePage::redirect('client/list');   
      }else{
       // var_dump($validation->getErrors());
         $errors =  $validation->displayErrors();
         $villes = new ModelVille;
         $villes = $villes->select('nom');
        return Twig::render('client-insert.php', ['errors' => $errors, 'villes'=> $villes, 'client' => $_POST]);
      }
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

    public function edit($value){
      $client = new ModelClient;
      $selectId = $client->selectId($value);

      $ville = new ModelVille;
      $villes = $ville->select('nom');

      return Twig::render('client-edit.php', ['client' => $selectId, 'villes' => $villes]);

    }
    public function update(){

      $validation = new Validation;
      extract($_POST);
      $validation->name('nom')->value($nom)->pattern('alpha')->required()->max(30);
      $validation->name('adresse')->value($adresse)->pattern('alphanum')->max(45);
      $validation->name('phone')->value($phone)->pattern('tel')->max(20);
      $validation->name('ville_id')->value($ville_id)->pattern('int')->required();
      $validation->name('pays')->value($pays)->pattern('alpha')->max(20);

      if($validation->isSuccess()){
        $client = new ModelClient;
        $update = $client->update($_POST);
        RequirePage::redirect('client/list'); 

      }else{
       // var_dump($validation->getErrors());
         $errors =  $validation->displayErrors();
         $villes = new ModelVille;
         $villes = $villes->select('nom');
        return Twig::render('client-edit.php', ['errors' => $errors, 'villes'=> $villes, 'client' => $_POST]);
      }
    }

    public function delete(){
        $client = new ModelClient;
        $delete = $client->delete($_POST);
        RequirePage::redirect('client/list'); 
    }
}




