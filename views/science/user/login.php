<?php include_once ROOT.'/views/layouts/header.php' ;?>
<div class="labmerg">
    <div class="absolutecenter">
                        <?php if (isset($errors) && is_array($errors)): ?>
                            <ul>
                                <?php foreach ($errors as $error): ?>
                                    <li><?php echo $error; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                        <h1 class="center">Вход</h1>
                        <form method="post">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control input-lg" id="inputPassword3" placeholder="E-mail" value="<?php echo $email ?>">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control input-lg" id="inputPassword3" placeholder="Пароль" value="<?php echo $password ?>">
                            </div>
                            <div class="form-group center">
                                <input type="submit" name="submit" class="btn btn-default btn-block btn-lg " value="Войти">
                            </div>
                        </form>
                        <hr/>
                        <a href="/Science/registration" class="btn btn-primary btn-block btn-lg ">Зарегистрироваться</a>
                
        </div>
</div>
        

<?php include_once ROOT.'/views/layouts/footer.php' ;?>



