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


    <main class="section">
      <div class="container">
        <h1 class="title-1">Шапки</h1>
        <ul class="projects">
          <li class="project">
            <img src="img/image.png" alt="" class="project_img">
            <button class="project_title">
              <img src="img/button.png" alt="" class="project_button">
            </button>
          </li>
          <li class="project">
            <img src="img/image.png" alt="" class="project_img">
            <button class="project_title">
              <img src="img/button.png" alt="" class="project_button">
            </button>
          </li>
          <li class="project">
            <img src="img/image.png" alt="" class="project_img">
            <button class="project_title">
              <img src="img/button.png" alt="" class="project_button">
            </button>
          </li>
          <li class="project">
            <img src="img/image.png" alt="" class="project_img">
            <button class="project_title">
              <img src="img/button.png" alt="" class="project_button">
            </button>
          </li>
          <li class="project">
            <img src="img/image.png" alt="" class="project_img">
            <button class="project_title">
              <img src="img/button.png" alt="" class="project_button">
            </button>
          </li>
          <li class="project">
            <img src="img/image.png" alt="" class="project_img">
            <button class="project_title">
              <img src="img/button.png" alt="" class="project_button">
            </button>
          </li>
        </ul>
      </div>
    </main>

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