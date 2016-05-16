<?php

class UserController {
    
    public function actionRegister() {
        
        $user=array();
        $user['first_name']='';
        $user['last_name']='';
        $user['email']='';
        $user['password']='';
        $user['university']='';
        $result=false;
        
        if (isset($_POST['submit'])) {
            $user['first_name'] = $_POST['first_name'];
            $user['last_name'] = $_POST['last_name'];
            $user['email'] = $_POST['email'];
            $user['password'] = $_POST['password'];
            $user['university'] = $_POST['university'];

            $errors = false;
            
            if (!User::checkEmail($user['email'])){
                $errors[]='Неверный Email';
            }
            
            if (!User::checkPassword($user['password'])){
                $errors[]='Пароль должен быть не менее 6 символов';
            }
            
            if (User::checkEmailExist($user['email'])){
                $errors[]='Такой Email уже существует';
            }
            
            if ($errors == false) {
                 $result = User::register($user);
            }
            
        }
        
        
        include_once ROOT.'/views/science/user/registration.php';
        
        return true;
    }
    
    public function actionLogin() {
                
        $email='';
        $password='';
        
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $errors = false;
            
            if (!User::checkEmail($email)){
                $errors[]='Неверный Email';
            }
            
            if (!User::checkPassword($password)){
                $errors[]='Пароль должен быть не менее 6 символов';
            }
            
            
            $userId = User::checkUserData($email,$password);
            
            if ($userId == false){
                $errors[]='Неверные Email или пароль';
            } else {
                User::auth($userId);
                
                header("Location: /Science");
            }
        }
        
        include_once ROOT.'/views/science/user/login.php';
        
        return true;
        
    }
    
    public function actionLogout() {
         
        User::out();
        
        header("Location: /Science");
        
        return true;
    }
}
