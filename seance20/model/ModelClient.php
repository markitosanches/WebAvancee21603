<?php

   class ModelClient extends CRUD{
       protected $table = 'client';
       protected $primaryKey = 'id';

       protected $fillable = ['nom', 'adresse', 'phone', 'ville_id'];

   } 


?>