<?php


class AdminLabController {
    
    public function actionIndex() {
        
        $labList = array();
        $labList = lab::getLabList();
        
        $i = 0;

        while($i<count($labList)){
                $labList[$i]['category_id'] = Category::getCategoryName($labList[$i]['category_id']);
                $i++;
            }
        
        
        include_once ROOT.'/views/admin/admin_lab/index.php';
        return true;
    }
    
    public function actionCreate() {
        
        $categoriesList = Category::getCategoriesListAdmin();

        if (isset($_POST['submit'])) {
            $options['name'] = $_POST['name'];
            $options['short_description'] = $_POST['short_description'];
            $options['category_id'] = $_POST['category_id'];
            $options['description'] = $_POST['description'];
            $options['available'] = $_POST['available'];


            $id = lab::createLab($options);

            if ($id) {
                if (is_uploaded_file($_FILES['image_1']['tmp_name'])) {
                    move_uploaded_file($_FILES['image_1']['tmp_name'], ROOT . "/upload/lab/img/{$id}_1.jpg");
                }
                 if (is_uploaded_file($_FILES['image_2']['tmp_name'])) {
                    move_uploaded_file($_FILES['image_2']['tmp_name'], ROOT . "/upload/lab/img/{$id}_2.jpg");
                }
                 if (is_uploaded_file($_FILES['image_3']['tmp_name'])) {
                    move_uploaded_file($_FILES['image_3']['tmp_name'], ROOT . "/upload/lab/img/{$id}_3.jpg");
                }
                 if (is_uploaded_file($_FILES['video']['tmp_name'])) {
                    move_uploaded_file($_FILES['video']['tmp_name'], ROOT . "/upload/lab/video/{$id}.mp4");
                }
                 if (is_uploaded_file($_FILES['play_lab']['tmp_name'])) {
                    move_uploaded_file($_FILES['play_lab']['tmp_name'], ROOT . "/upload/lab/play_lab/{$id}.jpg");
                }
                 if (is_uploaded_file($_FILES['download_lab_win']['tmp_name'])) {
                    move_uploaded_file($_FILES['download_lab_win']['tmp_name'], ROOT . "/upload/lab/download_lab/{$id}_win.zip");
                }
                 if (is_uploaded_file($_FILES['download_lab_mac']['tmp_name'])) {
                    move_uploaded_file($_FILES['download_lab_mac']['tmp_name'], ROOT . "/upload/lab/download_lab/{$id}_mac.zip");
                }
            }

            header('Location: /admin/lab');
        }

        include_once ROOT . '/views/admin/admin_lab/create.php';
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

