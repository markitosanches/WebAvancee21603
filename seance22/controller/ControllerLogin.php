<?php

RequirePage::requireModel('CRUD');
RequirePage::requireModel('User');
RequirePage::requireLibrary('Validation');


    class ControllerLogin {
    
        public function index(){
            return Twig::render('login-index.php');
        }

        public function authentication(){
            
            extract($_POST);

            $user = new ModelUser();
            $checkuser = $user->checkuser($username, $password);
        
            return Twig::render('login-index.php', ['errors' => $checkuser]);

        }

        public function logout(){
            session_destroy();
            RequirePage::redirect('login');
        }

    }


?>