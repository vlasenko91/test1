<?php include_once ROOT.'/views/layouts/header.php' ;?>
<div class="labmerg">
    <div class="container"> 
        <div class="row">
            <div class="col-md-8">
                <div class="back_white">
                <div class="fotorama" data-nav="thumbs" data-width="100%" data-autoplay="true" data-transition="crossfade" 
                     data-loop="true" data-autoplay="true" data-thumbheight="64px" data-thumbwidth="114px">
                    <a href="/upload/lab/img/<?php echo $labItem['id']?>_1.jpg" ><img src="/upload/lab/img/<?php echo $labItem['id']?>_1.jpg"></a>
                    <a href="/upload/lab/img/<?php echo $labItem['id']?>_2.jpg" ><img src="/upload/lab/img/<?php echo $labItem['id']?>_2.jpg"></a>
                    <a href="/upload/lab/img/<?php echo $labItem['id']?>_3.jpg" ><img src="/upload/lab/img/<?php echo $labItem['id']?>_3.jpg"></a>
                    <a href="https://www.youtube.com/embed/tskaKXvPChs" data-fit="cover"></a>
                </div>
                </div>
                <div class="back_white marg_top marg_bot smallpad">
                            <div class="row">
                                <form method="post">
                                    <div class="col-md-3 center">
                                        <p>Оставьте отзыв </p>
                                        <input type="submit" name="submit" class="btn btn-primary btnfix" value="отправить">
                                    </div>
                                    <div class="col-md-9">
                                        <h4 class="list-group-item-heading"><?php
                                            if (isset($user)) {
                                                echo $user['first_name'] . ' ' . $user['last_name'];
                                            }  else {
                                                echo 'Гость';  
                                            }?></h4>
                                        <textarea wrap="hard" id="comment" type="text" name="comment" rows="2"></textarea>
                                    </div>
                                </form>
                                </div>
                                <?php foreach ($comments as $commentItem): ?>
                                <hr/>
                                <h4 class="list-group-item-heading">
                                    <?php
                                    if (isset($commentItem['first_name'])) {
                                        echo $commentItem['first_name'] . ' ' . $commentItem['last_name'];
                                    } else {
                                        echo "Гость";
                                    }
                                    ?>
                                    <small><?php echo $commentItem['date'] ?></small>
                                </h4>
                                <p class="list-group-item-text">
                                    <?php echo nl2br($commentItem['comment']) ?>
                                </p> 
                        <?php endforeach; ?>
                                
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="back_white leftmerg smallpad">
                <a tabindex="0" class="btn btnfix btn-default pull-right" role="button" data-toggle="popover" 
                   data-content="Доступ бесплатен на время тестирования" data-placement="left">Открыть доступ</a>
                <h2 class="text-center">
                    <?php echo $labItem['name'] ?>
                </h2>
                
                <strong>Категория <?php echo $category_name ?></strong> <br/>
                <strong>Описание</strong> 
                <p><?php echo $labItem['description'] ?></p>
                <hr/>
                <div class="center">
                    <p>Онлайн доступ</p> 
                    <a class="btn btn-primary btnfix" href="/upload/lab/play_lab/index_<?php echo $labItem['id'] ?>.html" target="_blank">
                        Играть
                    </a>
                    <p>Cкачать офф-лайн версию</p>                                
                    <div class="btn-group">
                        <a class="btn btn-primary  btnfix dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Скачать <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/upload/lab/download_lab/<?php echo $labItem['id'] ?>_win.zip" download><i class="fa fa-download"></i> Windows</a></li>
                            <li><a href="/upload/lab/download_lab/<?php echo $labItem['id'] ?>_mac.zip" download><i class="fa fa-download"></i> MacOX</a></li>
                        </ul>
                    </div>
                </div>
                </div>
            </div>
        </div> 
    </div>
</div>


<?php include_once ROOT . '/views/layouts/footer.php'; ?>


