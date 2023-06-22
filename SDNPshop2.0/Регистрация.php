<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="css/style.css" />
    <title>SDNPShop</title>
  </head>
  <body>
    <nav class="header">
      <div class="header-logo">
        <a href="./index.php" class="logo">
          <strong>SDNP</strong><small>Shop</small>
        </a>
      </div>
      <ul class="header-menu">
        <li class="header-menu_item"><a href="./Футболки.php" class="header-menu_link">Футболки</a></li>
        <li class="header-menu_item"><a href="./Худи.php" class="header-menu_link">Худи</a></li>
        <li class="header-menu_item"><a href="./Поло.php" class="header-menu_link">Поло</a></li>
        <li class="header-menu_item"><a href="./Шапки.php" class="header-menu_link">Шапки</a></li>
        <li class="header-menu_item"><a href="./Трусы.php" class="header-menu_link">Трусы</a></li>
        <li class="header-menu_item"><a href="./Сувениры.php" class="header-menu_link">Сувениры</a></li>
        <li class="header-menu_img"><a href="#" class="header-menu_img"><img src="img/корзина.png"></a></li>
        <?php
        if($_COOKIE['user'] == ''):
        ?> 
        <li class="header-menu_img"><a href="./Регистрация.php" class="header-menu_img"><img src="img/Login.png"></a></li>
        <?php else: ?> 
          <li class="header-menu_img"><a href="./Профиль.php" class="header-menu_img"><img src="img/profile.png"></a></li>
        <?php endif; ?> 
      </ul>
    </nav>

    <?php
      if($_COOKIE['user'] == ''):
    ?> 


    <main class="section-reg1">
      <div class="container">
        <h1 class="title-1">Регистрация</h1>
        <form action="php/reg.php" method="post" class="reg-menu">
          <input type="text" class="form-control" name="mail" id="mail" placeholder="Введите почту">
          <input type="tel" class="form-control" name="phone" id="phone" placeholder="Введите телефон">
          <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя">
          <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль">
          <button class="btn-success">Зарегистрировать</button>
        </form>
      </div>
    </main>

    <?php
      else:
    ?> 
      <p>Кнопка <a href="php/exit.php">Выйти</a>.</p>
    <?php
      endif;
    ?> 
   





    <div class="footer">
      <div class="container_lower">
        <div class="row">
          <div class="Group_1">
            <div class="Group_1_row">
              <a class="footer_img"><img src="img/Лого.png"></a>
              <a href="https://discord.gg/MNrpajjD" class="footer_img_2"><img src="img/Discord.png"></a>
              <a href="#" class="footer_img_2"><img src="img/VK.png"></a>
            </div>  
            <h1 class="title-2">© 2023, SDNPShop.ru</h1>
          </div>
          <div class="Group_2">
            <a href="https://tpu.ru/" class="footer_img_3"><img src="img/TPU.png"></a>
          </div>
        </div>
      </div>
    </div>  











  </body>
</html>