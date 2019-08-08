<!--TITLE-->
<div class="container-fluid text-center">
    <h1 class="display-1">Codas_blog</h1>
</div>

<!--NAVIGATION-->
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://github.com/topee4">GitHub</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="https://github.com/topee4">Обо мне</a>
                </li>
            </ul>
<!--Вход / Регситрация-->
            <?php
            if ( isset($_SESSION['user']) ){
                echo '<div>Привет ' . '<b>' . $_SESSION['user']['login'] . '</b>!</div>';
                echo '<form action="pages/logout.php" method="POST">
                            <button type="submit" name="logout" class="btn btn-primary m-1">Выйти</button>
                        </form>';
            } else {
                ?>
                <a href="login">
                    <button type="button" class="btn btn-primary m-1">Войти</button>
                </a>
                <span> / </span>
                <a href="registration">
                    <button type="button" class="btn btn-primary m-1">Регистрация</button>
                </a>
                <?php
            }
            ?>
<!--            Поиск           -->
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Что искать?" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
            </form>
        </div>

    </nav>
</div>