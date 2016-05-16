<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Bootstrap Template</title>


        <!-- Bootstrap -->
        <link href="/templates/css/animate.css" rel="stylesheet">
        <link href="/templates/css/bootstrap.css" rel="stylesheet">
        <link href="/templates/css/style.css" rel="stylesheet">
        <link href="/templates/css/font-awesome.css" rel="stylesheet">
        <link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>   
        <div class="navbar-inverse navbar-fixed-top nontransparent" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                        <span class="sr-only"></span>
                        <i class="fa fa-bars"></i>                            
                    </button>
                    <a class="navbar-brand" href="/Science">
                        <div class="logo">
                            UniVirLab
                        </div>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="responsive-menu">
                    <form class="navbar-form navbar-right">
                        <?php if (User::isGuest()):?>
                        <a type="button" class="btn btn-primary" href="/Science/login" >Войти </a>
                        <?php else:?>
                        <a  type="button" class="btn btn-danger" href="/Science/logout" >Выход</a>
                        <?php endif;?>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a  href="/Science/lab">Лаборатории</a></li> 
                        <li><a  href="/Science/#Order">Разработать</a></li>
                    </ul>
                    
                </div>     
            </div>
        </div>
