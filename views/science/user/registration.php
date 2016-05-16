<?php include_once ROOT.'/views/layouts/header.php' ;?>
<div class="labmerg">
    <div class="absolutecenter">
                    <?php if ($result):?>
                    <p> Вы зарегистрированы </p>
                    <?php else:?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li><?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    <h1 class="center">Регистрация</h1>
                    <form method="post">
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <input type="text" name="first_name" class="form-control input-lg" placeholder="Имя" value="<?php echo $user['first_name'] ?>">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="last_name" class="form-control input-lg" id="inputPassword3" placeholder="Фамилия" value="<?php echo $user['last_name'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control input-lg" id="inputPassword3" placeholder="E-mail" value="<?php echo $user['email']?>">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control input-lg" id="inputPassword3" placeholder="Пароль" value="<?php echo $user['password']?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="university" class="form-control input-lg" id="inputPassword3" placeholder="Университет" value="<?php echo $user['university']?>">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary btn-block btn-lg" value="Отправить">
                        </div>
                    </form>
                    <?php endif;?>
            </div>
        </div>
       

<?php include_once ROOT.'/views/layouts/footer.php' ;?>
