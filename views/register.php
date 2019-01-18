
<?php require('/template/header.php');?>

	<div id="content">
	<div class="container table-block">
    <div class="row table-cell-block">
        <div class="col-sm-6 col-md-4 col-md-offset-4"  style="">
                        <h1 class="text-center login-title">Регистрация</h1>
                        <div class="account-wall">
                            <form method="post" class="form-signin" id="form-reg" name="form-reg">
                            <input type="hidden" name="action" value="register">
                               <?php if(!empty($pageData['error'])) :?>
                        <div style='color:red'><?php echo $pageData['error'];?> </div>
                    <?php endif; ?>
                   <?php if(!empty($pageData['registerMsg'])) :?>
                        <p><?php echo '<div style="color:red">'.$pageData['registerMsg'].'</div>'; ?></p>
                    <?php endif; ?>
                        <?php if(!empty($pageData['registerMsgOK'])) :?>
                        <p><?php echo '<div style="color:green">'.$pageData['registerMsgOK'].'</div>'; ?></p>
                    <?php endif; ?>
                        <input type="text" name="fullName" class="form-control" id="regFullName" placeholder="ФИО" value="<?=isset($_POST['fullName'])?$_POST['fullName']:'';?>" >
                                <input type="text" name="login" class="form-control" id="Login" placeholder="Логин" value="<?=isset($_POST['login'])?$_POST['login']:'';?>" >
                                <input type="email" name="email" class="form-control" id="regEmail" placeholder="Email" value="<?=isset($_POST['email'])?$_POST['email']:'';?>">
                                <input type="password" name="password" class="form-control" id="regPassword" placeholder="Пароль" >
                                <input type="password" name="password_2" class="form-control" id="regPassword2" placeholder="Пароль2" >
                                <input type="submit" name="submit" rel="reg" id="btn-reg" class="btn btn-lg btn-primary btn-block" value="Регистрация"/>
                            </form>
                            <div class="a-enter-in-auth"><a href="login">Войти</a><div>
                        </div>
                    </div>
                        </div>
        </div>
        
        <div class="col-sm-6 col-md-4 col-md-offset-4 padding-right" style="display: none">
            <h1 class="text-center login-title">Регистрация</h1>
            
            <form method="POST" clas="reg-form" id="form-reg2" name="form-reg2">
               <?php if(!empty($pageData['error'])) :?>
                        <div style='color:red'><?php echo $pageData['error'];?> </div>
                    <?php endif; ?>
                   <?php if(!empty($pageData['registerMsg'])) :?>
                        <p><?php echo '<div style="color:red">'.$pageData['registerMsg'].'</div>'; ?></p>
                    <?php endif; ?>
                        
                
                
                <p>
                    <p><strong>Ваш логин</strong></p>
                    <input type="text" name="login" id="login2"  value="<?=isset($_POST['login'])?$_POST['login']:'';?>">
                </p>
                <p>
                    <p><strong>Ваше полное имя</strong></p>
                    <input type="text" name="fullName" value="<?=isset($_POST['fullName'])?$_POST['fullName']:'';?>">
                </p>
                <p>
                <p>
                    <p><strong>Ваш Email</strong></p>
                    <input type="email" id="email2"   name="email" value="<?=isset($_POST['email'])?$_POST['email']:'';?>">
                </p>
                <p>
                    <p><strong>Ваш пароль</strong></p>
                    <input type="password" name="password">
                </p>
                <p>
                    <p><strong>Введите Ваш пароль ещё раз</strong></p>
                    <input type="password" name="password_2" >
                </p>
                <p>
                    <input  type="submit"  id="btn-reg2" name="submit" Value="Регистрировать">
                </p>
                
            </form>
            
        </div>
    </div>
</div>
	</div>

        </div></div>
<?php include('/template/footer.php');?>