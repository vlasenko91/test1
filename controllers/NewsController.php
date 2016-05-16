<?php

class NewsController {
    
    public function actionIndex() {
        echo 'каталог новостей';
        return true;
    }
    
    public function actionView() {
        echo 'отдельная новость';
        return true;
    }
}


