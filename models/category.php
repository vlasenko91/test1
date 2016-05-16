<?php

class category {
    
    
    public static function getCategoriesList() {
        
        $db = Db::getConnection();

        $categoryList = array();
        
        $result = $db->query("Select category.id, category.name, count(lab.id) From lab, category where category.id=lab.category_id Group by  lab.category_id");
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        $i = 0;
            while($row = $result->fetch()) {
                $categoryList[$i]['id'] =$row['id'];
                $categoryList[$i]['name']=$row['name'];
                $categoryList[$i]['count']=$row['count(lab.id)'];
                $i++;
            }
            
        return $categoryList;
        
    }
    
    public static function getCountLabs() {
        
        $db = Db::getConnection();

        
        $result = $db->query("Select count(id) From lab");
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        $labCount = $result->fetch();
            
        return $labCount;
        
    }
    
    public static function getCategoryName($category_id) {
        
        $category_id = intval($category_id);
        
        $db = Db::getConnection();

        $result = $db->query("Select name From category where id=$category_id");
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        $categoryName = $result->fetch();
            
        return $categoryName['name'];
        
    }
    
    public static function getCategoriesListAdmin() {
        
        $db = Db::getConnection();

        $categoriesList = array();
        
        $result = $db->query("Select * From category");
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        $i = 0;
            while($row = $result->fetch()) {
                $categoriesList[$i]['id'] =$row['id'];
                $categoriesList[$i]['name']=$row['name'];
                $categoriesList[$i]['order_num'] =$row['order_num'];
                $categoriesList[$i]['type']=$row['type'];
                $i++;
            }
            
        return $categoriesList;
        
    }
    
    public static function createCategory($options) {
       
        $db = Db::getConnection();
        
        $sql = "INSERT INTO category (name, order_num, type) Values "
                . "(:name, :order_num, :type)";
       
        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'],PDO::PARAM_STR);
        $result->bindParam(':order_num', $options['order_num'],PDO::PARAM_STR);
        $result->bindParam(':type', $options['type'],PDO::PARAM_INT);
        
        $result-> execute();
    }
}
