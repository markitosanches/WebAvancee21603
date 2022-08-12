<?php

   class ModelUser extends CRUD{
       protected $table = 'user';
       protected $primaryKey = 'id';

       protected $fillable = ['username', 'password', 'email', 'temp_password', 'privilege_id'];

       public function checkuser($username, $password){

        $sql = "SELECT * FROM $this->table WHERE username = ?";
        $stmt = $this->prepare($sql);
        $stmt->execute(array($username));

        $count=$stmt->rowCount();

        if($count==1){
            $user_info = $stmt->fetch();
            $dbPassword = $user_info["password"];
            if(password_verify($password, $dbPassword)){
           
                session_regenerate_id();
                $_SESSION['user_id'] = $user_info['id'];
                $_SESSION['privilege_id'] = $user_info['privilege_id'];
                $_SESSION['fingerPrint'] = md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR']);
                
                RequirePage::redirect('client/list');

            }else{
                echo "Le mot de passe n est pas correct";
            }
        } else {
            echo "Le non de l utilisateur n est pas correct";
        }
       }
   } 


?>