<?php
RequirePage::requireModel('CRUD');
RequirePage::requireModel('Client');

class ControllerClient{

    public function index(){

        $client = new ModelClient;

        $select = $client->select();

        return $select;
    }
}




