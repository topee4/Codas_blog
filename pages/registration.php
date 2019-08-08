<div class="container-fluid mx-auto css_axis mt-5 css_forms">
    <form method="POST" action="intropage">

<!--        EMAIL-->
        <div class="form-group">
            <h5>Email адрес <span class="text-danger">*</span></h5>
            <input type="email" name="email" class="form-control" placeholder="Введите Email">
        </div>

<!--        ЛОГИН-->
        <div class="form-group">
            <h5>Никнейм <span class="text-danger">*</span></h5>
            <input type="login" name="login" class="form-control" placeholder="Введите Никнейм">
        </div>

<!--О СЕБЕ-->
<!--        <div class="form-group">-->
<!--            <h5>О себе</h5>-->
<!--            <input type="about" class="form-control" placeholder="Введите Имя">-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <input type="about" class="form-control" placeholder="Введите Фамилию">-->
<!--        </div>-->


<!--        PASSWORD-->
        <div class="form-group">
            <h5>Пароль <span class="text-danger">*</span></h5>
            <input type="password" name="password1" class="form-control" placeholder="Введите пароль">
        </div>
        <div class="form-group">
            <input type="password" name="password2" class="form-control" placeholder="Введите еще раз пароль">
        </div>

        <button type="submit" name="registration" class="btn btn-primary">Регистрация</button>
    </form>
</div>