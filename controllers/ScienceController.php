<?php

class ScienceController {
    
    public function actionIndex() {
        
        if (isset($_POST['submit'])) {
            
            $message = $_POST['message'];
            $username = $_POST['username'];
            $useremail=$_POST['useremail']; 
            
            $messagetext = 'Сообщение'.$message.'от'.$username.'/'.$useremail;
            $adminemail='vlasenko91@list.ru';
            $subject='любая тема';
            
            $result=  mail($adminemail, $subject,$messagetext);
            $result = true;
                   
            header("Location: /Science");
        }
        
        include_once ROOT.'/views/science/index.php';
        return true;
    }
   
}
