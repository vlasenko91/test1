<?php

class lab {
    
     public static function getLabList() {
       
        
        $db = Db::getConnection();
        
        $result = $db->query("SELECT * FROM lab");
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        $i = 0;

        while($row = $result->fetch()) {
            $labList[$i]['id'] =$row['id'];
            $labList[$i]['name']=$row['name'];
            $labList[$i]['short_description']=$row['short_description'];
            $labList[$i]['category_id']=$row['category_id'];
            $i++;
        }
        
        
        return $labList;
    }
    
    public static function getLabItemByCategory($category) {
        
        $category = intval($category);
        
        if ($category) {
            
            $db = Db::getConnection();
            
            $labList = array();

            $result = $db->query("SELECT * FROM lab Where category_id = '$category'");
            $result->setFetchMode(PDO::FETCH_ASSOC);

            $i = 0;


            while($row = $result->fetch()) {
                $labList[$i]['id'] =$row['id'];
                $labList[$i]['name']=$row['name'];
                $labList[$i]['short_description']=$row['short_description'];
                $labList[$i]['category_id']=$row['category_id'];
                $i++;
            }
            return $labList;
        }
    }
    public static function getLabItemById($category, $id) {
        
        $category = intval($category);
        $id = intval($id);
            
        if ($id) {
          
            $db = Db::getConnection();


            $result = $db->query("SELECT * FROM lab Where category_id = '$category' and id = $id");
            $result->setFetchMode(PDO::FETCH_ASSOC);

            $labItem = $result->fetch();
            return $labItem;
        }
    }
    
    public static function deleteLabById($id) {
        
        
        $db = Db::getConnection();
        
        $sql = "DELETE FROM lab Where id = :id";
        
        
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id,PDO::PARAM_INT);
        return $result-> execute();
        
    }
    
    public static function createLab($options) {
       
        $db = Db::getConnection();
        
        $sql = "INSERT INTO lab (name, short_description, category_id, description, available) Values "
                . "(:name, :short_description, :category_id, :description, :available)";
       
        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'],PDO::PARAM_STR);
        $result->bindParam(':short_description', $options['short_description'],PDO::PARAM_STR);
        $result->bindParam(':category_id', $options['category_id'],PDO::PARAM_INT);
        $result->bindParam(':description', $options['description'],PDO::PARAM_STR);
        $result->bindParam(':available', $options['available'],PDO::PARAM_INT);
        
        if ($result-> execute()) {
            return $db->lastInsertId();
        }
    }
    
    
    public static function updateLabByID($id, $options) {
       
        $db = Db::getConnection();
        
        $sql = "UPDATE lab SET 
                name = :name, 
                short_description = :short_description, 
                category_id = :category_id, 
                description = :description, 
                available = :available
                WHERE id = :id";
       
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id ,PDO::PARAM_INT);
        $result->bindParam(':name', $options['name'],PDO::PARAM_STR);
        $result->bindParam(':short_description', $options['short_description'],PDO::PARAM_STR);
        $result->bindParam(':category_id', $options['category_id'],PDO::PARAM_INT);
        $result->bindParam(':description', $options['description'],PDO::PARAM_STR);
        $result->bindParam(':available', $options['available'],PDO::PARAM_INT);
        
        return $result-> execute();
        
    }
    
    public static function getLabById($id) {
        
        $id = intval($id);
            
        if ($id) {
          
            $db = Db::getConnection();


            $result = $db->query("SELECT * FROM lab Where id = $id");
            $result->setFetchMode(PDO::FETCH_ASSOC);

            $labItem = $result->fetch();
            return $labItem;
        }
    }
  
}
