<?php
RequirePage::requireModel('CRUD');
RequirePage::requireModel('User');
RequirePage::requireModel('Privilege');
RequirePage::requireLibrary('Validation');

class ControllerUser{

    public function index(){
        return Twig::render('user-index.php');
    }

    public function create(){
        $privileges = new ModelPrivilege;
        $select = $privileges->select('privilege');    
        return Twig::render('user-create.php', ['privileges'=>$select]);
    }

    public function store(){
        
        $validation = new Validation;
        extract($_POST);
        $validation->name('username')->value($username)->pattern('email')->required();
        $validation->name('password')->value($password)->max(20)->min(6)->required();
        if($validation->isSuccess()){
            //insert - saisir dans 2 modeles avec 1 formulaire
           /* $privilege = new ModelPrivilege;
            $insertP = $privilege->insert($_POST);
            //return $insertP;

            $user = new ModelUser;
            $_POST['email'] = $username;
            $_POST['privilege_id'] = $insertP;
            //return print_r($_POST);
            $insertU = $user->insert($_POST);
            */

            $options = [
                'cost' => 10,
            ];
            $hashPassword= password_hash($password, PASSWORD_BCRYPT, $options);
            //return $hashPassword;
    
            $user = new ModelUser;
            $_POST['email'] = $username;
            $_POST['password'] = $hashPassword;
            $insert = $user->insert($_POST);

            RequirePage::redirect('user');
        }else{
            $errors =  $validation->displayErrors();
            return Twig::render('user-create.php', ['errors' => $errors, 'user' => $_POST]);
        }
    }
}