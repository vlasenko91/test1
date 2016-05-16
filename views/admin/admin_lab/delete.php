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
                <li><a href="/admin/lab">Управление лабораториями</a></li>
                <li class="active"> Удаление</li>
            </ol>
            <h3> Удаление Лаборатории № <?php echo $id ?> </h3> 
            <p>Вы действительно хотите удалить эту лабораторную работу?</p>
            <form method="post">
                <input class="btn btn-default" type="submit" name="submit" value="Удалить" />
            </form>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src='/templates/js/bootstrap.js'></script>
    </body>
</html>

