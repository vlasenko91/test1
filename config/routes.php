<?php

return array(
    
    'Science/lab/([0-9]+)/([0-9]+)' => 'lab/viewone/$1/$2',
    
    'Science/lab/([0-9]+)' => 'lab/view/$1',
    
    'Science/lab' => 'lab/index',
    
    'Science/registration' => 'user/register',
    
    'Science/login' => 'user/login',
    'Science/logout' => 'user/logout',
    
    'Science' => 'science/index',
    
    'Industry' => 'industry/index',
    
    'News/([0-9]+)' => 'news/view/$1',
    
    'admin/lab/create'=>'adminLab/create',
    'admin/lab/update/([0-9]+)'=>'adminLab/update/$1',
    'admin/lab/delete/([0-9]+)'=>'adminLab/delete/$1',
    'admin/lab'=>'adminLab/index',
    
    'admin/category/create'=>'adminCategory/create',
    'admin/category/update/([0-9]+)'=>'adminCategory/update/$1',
    'admin/category/delete/([0-9]+)'=>'adminCategory/delete/$1',
    'admin/category'=>'adminCategory/index',
    
    'admin' => 'admin/index',
    
    'News' => 'news/index',
    
    ''=>'site/index'
    
);

