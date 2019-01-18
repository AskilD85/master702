<?php require('/template/header.php');?>

	<div id="content">
	<div class="container table-block">
    <div class="row table-cell-block">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Вход в кабинет</h1>
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                <form class="form-signin" id="form-signin" method="post">
                    <?php if(!empty($pageData['error'])) :?>
                        <p><?php echo $pageData['error']; ?></p>
                    <?php endif; ?>
                <input type="text" class="form-control" name="login" id="login" placeholder="Логин" required>
                <input type="password" name="password" id="password" class="form-control" placeholder="Пароль" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
                </form>
                <div class="a-enter-in-auth"><a href="/register" >Регистрация</a></div>
            </div>
        </div>
    </div>
</div>
	</div>

<?php include('/template/footer.php');?>