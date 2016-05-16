<?php

class LabController {
    
    public function actionIndex() {
        
        $labList = array();
        $labList = lab::getLabList();
        
        $categories = array();
        $categories = Category::getCategoriesList();
        
        $count = array();
        $count = Category::getCountLabs();
        
        include_once ROOT.'/views/science/catalog/index.php';
        
        return true;
    }
    
    public function actionView($category) {
        
        $labList = array();
        $labList = lab::getLabItemByCategory($category);
        
        $categories = array();
        $categories = Category::getCategoriesList();
        
        $count = array();
        $count = Category::getCountLabs();
        
        
        include_once ROOT.'/views/science/catalog/view.php';
        
        return true;
    }
    
    public function actionViewone($category, $id) {
        
        $labItem = array();
        $labItem = lab::getLabItemById($category, $id);
        
        $category_name = category::getCategoryName($category);
        
        $comments = array();
        $comments = Comment::getCommentsList($id);
        $comment_count=count($comments); 
        
        for ($i=0; $i<$comment_count; $i++) {

        $adduser= user::getUserData($comments[$i]['user_id']);          

        $comments[$i]['first_name']= $adduser['first_name'];
        $comments[$i]['last_name']= $adduser['last_name'];

        }
        
        
        if (isset($_SESSION['user'])){
                
            $user_id = $_SESSION['user'];
                
            $user= User::getUserData($user_id);
        }
        
        if (isset($_POST['submit'])) {
            
            $comment = $_POST['comment'];
            $lab_id = $id;
            if (empty($user_id)){
            $user_id=0   ; 
            }
            
            comment::createComment($lab_id,$user_id,$comment);
            
            header("Location: /Science/lab/".$category."/".$id);
        }
        
        include_once ROOT.'/views/science/catalog/viewone.php';
        
        return true;
    }
}

