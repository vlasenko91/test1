<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Bootstrap Template</title>


        <!-- Bootstrap -->
        <link href="/templates/css/bootstrap.css" rel="stylesheet">
        <link href="/templates/css/style.css" rel="stylesheet">
        <link href="/templates/css/font-awesome.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body >
        <div class="container">
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h4> <a href="/admin"> Администраторская панель</a> </h4>
                    </div>
                    <div class="col-sm-6">
                        <div class="pull-right">
                            <a class="btn btn-default" href="/">  На сайт <i class="fa fa-sign-out"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/admin">Админпанель</a></li>
                <li> <a href="/admin/lab">Управление лабораториями</a></li>
                <li class="active"> Редактирование</li>
            </ol>
            <form action="#" method="post" enctype="multipart/form-data">  
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">Название</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="" value="<?php echo $lab['name']?>">
                        </div>
                        <br/>

                        <div class="form-group">
                            <label for="short_description">Краткое описание</label>
                            <input maxlength="10" type="text" class="form-control" name="short_description" id="short_description" placeholder="" 
                                   value="<?php echo $lab['short_description']?>">
                        </div>
                        <br/>

                        <label for="category">Категория</label>
                        <select class="form-control" id="category" name="category_id">
                            <?php foreach ($categoriesList as $category):?>
                            <option <?php if ($lab['category_id']==$category['id']){echo "selected='selected'"; }?> value="<?php echo $category['id']?>"> 
                                <?php echo $category['name']?>
                            </option>
                            <?php endforeach; ?>
                        </select>  
                        <br/>
                        
                        <label for="description">Детальное описание</label>
                        <textarea class="form-control" name="description" id="description"> <?php echo $lab['description']?></textarea>
                        <br/>
                        
                        <label for="available">Категория</label>
                        <select class="form-control" id="available" name="available">
                            <option value="1" <?php if ($lab['available']==1){echo "selected='selected'"; }?>>Доступна</option>
                            <option value="0" <?php if ($lab['available']==0){echo "selected='selected'"; }?>>Недоступна</option>
                        </select>  
                        <br/>

                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
                    </div>
                    <div class="col-md-4 col-md-offset-2">
                        <h4>Загрузка Файлов</h4>
                        <br/>
                        
                        <div>
                            <label for="exampleInputFile1">Лаборатория WebGL</label>
                            <input type="file" name="play_lab" id="exampleInputFile1">
                        </div>
                        <br/>
                        <div>
                            <label for="exampleInputFile1">Лаборатория for Win</label>
                            <input type="file" name="download_lab_win" id="exampleInputFile1">
                        </div>
                        <br/>
                        <div>
                            <label for="exampleInputFile1">Лаборатория for Mac</label>
                            <input type="file" name="download_lab_mac" id="exampleInputFile1">
                        </div>
                        <br/>

                        <div>
                            <label for="exampleInputFile2">Картинка1(Предпросмотр)</label>
                            <input type="file" name="image_1" id="exampleInputFile2">
                        </div>
                        <br/>
                        <div>
                            <label for="exampleInputFile2">Картинка2</label>
                            <input type="file" name="image_2" id="exampleInputFile2">
                        </div>
                        <br/>
                        <div>
                            <label for="exampleInputFile2">Картинка3</label>
                            <input type="file" name="image_3" id="exampleInputFile2">
                        </div>
                        <br/>

                        <div>
                            <label for="exampleInputFile3">Видео</label>
                            <input type="file" name="video_path" id="exampleInputFile3">
                        </div>
                        <br/>
                    </div>
                </div>
            </form> 
        </div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src='/templates/js/bootstrap.js'></script>
</body>
</html>



