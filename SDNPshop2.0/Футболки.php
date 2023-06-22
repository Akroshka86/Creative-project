<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="css/style1.css" />
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
        <li class="header-menu_img"><a href="#" class="header-menu_img busket"><img src="img/корзина.png"></a></li>
        <?php
        if($_COOKIE['user'] == ''):
        ?> 
        <li easy-toggle="#modalWin" easy-class="show" easy-rcoe class="header-menu_img"><a href="./Регистрация.php" class="header-menu_img"><img src="img/Login.png"></a></li>
        <?php else: ?> 
          <li class="header-menu_img"><a href="./Профиль.php" class="header-menu_img"><img src="img/profile.png"></a></li>
        <?php endif; ?> 
      </ul>
    </nav>


    <main class="section">
          <div class="container">
              <h1 class="title-1">Футболки</h1>
              <ul class="projects">
                  <li class="project">
                      <img src="img/img1-.png" alt="" class="project_img1">
                      
                      <img src="img/image.png" alt="" class="project_img">
                      
                      <div class="product__quantity"></div>

                      <a class="project_title" href="./Футболка.html">
                          <a class="project_button1"
                             data-sb-id-or-vendor-code="001"
                             data-sb-product-name="Футболка1"
                             data-sb-product-price="300"
                             data-sb-product-quantity="1"
                             data-sb-product-img="https://static.batnorton.com/image/46497-63e5eb4fb18138.46474303/1462x2048-1_2687833004.jpg">
                              <img src="img/button.png" alt="" class="project_button">

                          </a>
                      </a>
                  </li>
                  <li class="project">
                      <img src="img/img2-.png" alt="" class="project_img1">
                      <img src="img/image.png" alt="" class="project_img">
                      <div class="invis">
                          <div class="product__quantity"></div>
                      </div>
                      <a class="project_title">

                          <a class="project_button1"
                             data-sb-id-or-vendor-code="002"
                             data-sb-product-name="Футболка2"
                             data-sb-product-price="500"
                             data-sb-product-quantity="1"
                             data-sb-product-img="https://static.batnorton.com/image/38478-615168d1d1d4b9.92348366/1072x1500-1_901712639.jpg">
                              <img src="img/button.png" alt="" class="project_button">
                          </a>
                      </a>
                  </li>
                  
              </ul>
          </div>
      </main>


    <div id="modalWin" class="modal">
      <div class="modal-window">
        <h1 class="modal-title">Авторизация</h1>
        <form action="php/auth.php" method="post" class="modal-menu">
            <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин">
            <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль">
            <button class="btn-success">Войти</button>
        </form>
          <div class="reg">
              <h1 class="modal-title-1">Первый раз в SDNPshop?</h1>
              <button class="btn-success-1"><a href="./Регистрация.php" class="header-menu_link">Зарегистрироваться</a></button>
            </div>
        <button class="btn-close" easy-remove="#modalWin" easy-class="show" easy-rcoe>x</button>
      </div>
      <div class="overlay" easy-remove="#modalWin" easy-class="show" easy-rcoe>
            
      </div>
    </div>
    <script type="module">
      import easySetup from "easy-toggler";

      easySetup({
        // html attrs
        toggle: 'easy-toggle',
        add: 'easy-add',
        remove: 'easy-remove',
        class: 'easy-class',
        rcoe: 'easy-rcoe',
        parallel: 'easy-parallel',
        self: 'easy-self',
        selfRcoe: 'easy-self-rcoe',

        // Hooks
        onToggle($el){},
        onAdd($el){},
        onRemove($el){},
        onRcoe($el){},
      });
    </script>      
    <script src="https://cdn.jsdelivr.net/npm/easy-toggler@2.2.7"></script>
    <script type="module">
      const easySetup = require("easy-toggler");

      easySetup({
        // html attrs
        toggle: 'easy-toggle',
        add: 'easy-add',
        remove: 'easy-remove',
        class: 'easy-class',
        rcoe: 'easy-rcoe',
        parallel: 'easy-parallel',
        self: 'easy-self',
        selfRcoe: 'easy-self-rcoe',

        // Hooks
        onToggle($el){},
        onAdd($el){},
        onRemove($el){},
        onRcoe($el){},
      });
    </script>

      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

      <link rel="stylesheet" href="smartbasket/css/smartbasket.min1.css">

      <div class="smart-basket__wrapper"></div>

    <script src="./smartbasket/js/smartbasket.min.js"></script>

    <script>
          $(function () {
              $('.smart-basket__wrapper').smbasket({
                  productElement: 'project',
                  buttonAddToBasket: 'project_button1',
                  productPrice: 'product__price-number',
                  productSize: 'product__size-element',

                  productQuantityWrapper: 'product__quantity',
                  smartBasketMinArea: 'busket',
                  countryCode: '+7',
                  smartBasketCurrency: '$',
                  smartBasketMinIconPath: 'smartbasket/img/корзина.svg',

                  agreement: {
                      isRequired: true,
                      isChecked: true,
                      isLink: 'https://artstranger.ru/privacy.html',
                  },
                  nameIsRequired: false,
              });
          });
    </script>






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