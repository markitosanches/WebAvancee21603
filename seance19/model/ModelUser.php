<?php

   class ModelUser extends CRUD{
       protected $table = 'user';
       protected $primaryKey = 'id';

       protected $fillable = ['username', 'password', 'email', 'temp_password', 'privilege_id'];

   } 


?>