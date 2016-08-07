<?php echo validation_errors(); ?>

</div>


<div id="wrapper-reg">

    <form name="login-form" class="login-form-reg" action="http://localhost/testNews/users/register" method="post">

        <div class="header-reg">
            <h1>Регистрация</h1>
            <span>Введите ваши данные для регистрации и входа в ваш личный кабинет. </span>
        </div>

        <div class="content-reg">
            <div class="login-icon"><i class="fa fa-user-plus "></i></div>
            <input name="username" type="text" class="input-reg login" placeholder="Login" onfocus="this.value=''" />
            <div class="pass-icon"> <i class="fa fa-lock"></i></div>
            <input name="password" type="password" class="input-reg password" placeholder="password" onfocus="this.value=''" />
            <div class="email-icon"> <i class="fa fa-envelope-o "></i></div>
            <input name="email" type="email" class="input-reg email" placeholder="E-mail" onfocus="this.value=''" />

        </div>

        <div class="footer-reg">
            <input type="submit" name="submit" value="Зарегистрироваться" class="button" />

        </div>

    </form>
</div>