<?php


class AdminCategoryController {
    
    public function actionIndex() {
        
        $categoriesList = Category::getCategoriesListAdmin();
        
        include_once ROOT.'/views/admin/admin_category/index.php';
        return true;
    }
    
    public function actionCreate() {
        
        if (isset($_POST['submit'])) {
            $options['name'] = $_POST['name'];
            $options['order_num'] = $_POST['order_num'];
            $options['type'] = $_POST['type'];
            
            header('Location: /admin/category');
        }

        include_once ROOT . '/views/admin/admin_category/create.php';
        return true;
    }
    
    public function actionUpdate($id) {
        
        $categoriesList = Category::getCategoriesListAdmin();
        
        $lab = lab::getLabById($id);

        if (isset($_POST['submit'])) {
            $options['name'] = $_POST['name'];
            $options['short_description'] = $_POST['short_description'];
            $options['category_id'] = $_POST['category_id'];
            $options['description'] = $_POST['description'];
            $options['available'] = $_POST['available'];


            if( lab::updateLabByID($id,$options)){
                if (is_uploaded_file($_FILES['image']['tmp_name'])) {
                    move_uploaded_file($_FILES['image']['tmp_name'], ROOT . "/upload/lab/img/{$id}.jpg");
                }
            }
            header('Location: /admin/lab');
            
        }

        include_once ROOT . '/views/admin/admin_lab/update.php';
        return true;
    }
    
    public function actionDelete($id) {
        
        if (isset($_POST['submit'])){
            
            lab::deleteLabById($id);
            
            header('Location: /admin/lab');
        }
        include_once ROOT.'/views/admin/admin_lab/delete.php';
        return true;
        
    }
}

