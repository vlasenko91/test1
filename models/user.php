<?php

class User {
    
    public static function Registration() {
        
        
    }
    
    public static function checkPassword($password) {
            if (strlen($password)>=6){
                return true;
            }
            return false;
    }
    
    public static function checkEmail($email) {
            if (filter_var($email,FILTER_VALIDATE_EMAIL)){
                return true;
            }
            return false;
    }
    
    public static function checkEmailExist($email) {
        
        $db = Db::getConnection();
        
        $sql= 'SELECT COUNT(*) FROM user WHERE email = :email';
        
        $result= $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();
        
        if($result->fetchColumn()){
        return true;
        } else {
        return false;
        }
    }
    
    public function auth($userId) {
       
        $_SESSION['user'] = $userId;
    }
    
    public function out() {
       
        session_destroy();
    }
    
    public static function isGuest() {
        if (isset($_SESSION['user'])) {
            return false;
        }
        return true;
    }
    
    public static function register($user) {
        
        
        $db = Db::getConnection();
        
        $sql = "INSERT INTO user (first_name, last_name, email, password, university) Values "
                . "(:first_name, :last_name, :email, :password, :university)";
       
        $result = $db->prepare($sql);
        $result->bindParam(':first_name', $user['first_name'],PDO::PARAM_STR);
        $result->bindParam(':last_name', $user['last_name'],PDO::PARAM_STR);
        $result->bindParam(':email', $user['email'],PDO::PARAM_STR);
        $result->bindParam(':password', $user['password'],PDO::PARAM_STR);
        $result->bindParam(':university', $user['university'],PDO::PARAM_STR);
        
        return $result-> execute();
    }
    
    public static function checkUserData($email,$password) {
        
        $db = Db::getConnection();
        
        $sql = "Select * FROM user WHERE email=:email AND password=:password";
       
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email,PDO::PARAM_STR);
        $result->bindParam(':password', $password,PDO::PARAM_STR);
        $result->execute();
        
        $user=$result->fetch();
        if ($user) {
            return $user['id'];
        }
        return false;
    }
    
    public static function getUserData($id) {
        
        $db = Db::getConnection();
        
        $sql = "Select * FROM user WHERE id=:id";
       
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id,PDO::PARAM_STR);
        $result->execute();
        
        $getuser=$result->fetch();
        $user['first_name'] =$getuser['first_name'];
        $user['last_name']=$getuser['last_name'];
        
        return $user;
    }
}

