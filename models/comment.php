<?php

class Comment {
    
    public function getCommentsList($id) {
        
        $id = intval($id);
        
        $db = Db::getConnection();

        $commentList = array();
        
        $result = $db->query("Select comment.id, comment.comment, comment.date, comment.user_id From lab, comment "
                . "where comment.lab_id= $id Group by comment.id order by comment.date DESC");
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        
        $i = 0;
            while($row = $result->fetch()) {
                $commentList[$i]['id'] =$row['id'];
                $commentList[$i]['comment']=$row['comment'];
                $commentList[$i]['date']=$row['date'];
                $commentList[$i]['user_id']=$row['user_id'];
                $i++;
            }
            
        return $commentList;
    }
    
    public function createComment($lab_id,$user_id,$comment) {
        
                
        $user_id = intval($user_id);
        $lab_id = intval($lab_id);
        $comment = strval($comment);
        
        $db = Db::getConnection();
        
        $sql = "INSERT INTO comment (user_id, lab_id, comment) Values "
                . "(:user_id, :lab_id, :comment)";
       
        $result = $db->prepare($sql);
        $result->bindParam(':user_id', $user_id,PDO::PARAM_STR);
        $result->bindParam(':lab_id', $lab_id,PDO::PARAM_STR);
        $result->bindParam(':comment', $comment,PDO::PARAM_STR);
        $result-> execute();
        
    }
}
