<?php
RequirePage::requireModel('CRUD');
RequirePage::requireModel('Client');

class ControllerClient{

    public function index(){

      $view = new view('client-index');
      $view->output('title', 'Page Client');
      $view->output('text', 'Lorem ABC, abc Lorem');

    }

    public function list(){
        $client = new ModelClient;

        $select = $client->select();

        $view = new view('client-list');
        $view->output('clients', $select);

    }
}




