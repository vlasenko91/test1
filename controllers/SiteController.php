<?php

class SiteController {
    
public function actionIndex() {
    
        include_once ROOT.'/views/main/index.php';
        return true;
    }
}

