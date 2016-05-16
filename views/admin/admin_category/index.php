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
                <li class="active" >Управление Категориями</li>
            </ol>
            <h4> <a href="/admin/category/create"><i class="fa fa-plus"></i> Добавить Категорию </a> </h4>
            <table class="table table-striped">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Order number</th>
                    <th>Type</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($categoriesList as $categoryItem): ?>
                    <tr>
                        <td><?php echo $categoryItem['id']?> </td>
                        <td><?php echo $categoryItem['name']?> </td>
                        <td><?php echo $categoryItem['order_num']?> </td>
                        <td><?php echo $categoryItem['type']?> </td>
                        <td><a href="/admin/category/update/<?php echo $categoryItem['id']?>"><i class="fa fa-edit"></i></a> </td>
                        <td><a href="/admin/category/delete/<?php echo $categoryItem['id']?>"><i class="fa fa-trash-o"></i></a> </td>
                    </tr>
                <?php endforeach;?>
                   
            </table>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src='/templates/js/bootstrap.js'></script>
    </body>
</html>

