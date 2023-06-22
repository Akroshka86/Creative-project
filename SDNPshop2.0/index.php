<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Document</title>

	<link rel="stylesheet" href="css/main2.css">

	<script src="libs/gsap/gsap.min.js" defer></script>
	<script src="libs/gsap/ScrollTrigger.min.js" defer></script>
	<script src="libs/gsap/ScrollSmoother.min.js" defer></script>

	<script src="js/app.js" defer></script>

</head>
<body>

	<div class="wrapper">
		<div class="content">

			<header class="main-header">
				<div class="layers">
					<div class="layer__header">
						<div class="layers__caption">SDNP shop</div>
						<div class="layers__title">Street clothes</div>
					</div>
					<div class="layer layers__base" style="background-image: url(img/layer2.3.png);"></div>
					<div class="layer layers__middle" style="background-image: url(img/layer2.png);"></div>
					<div class="layer layers__front" style="background-image: url(img/layer2.1.png);"></div>
				</div>
			</header>
		
			<article class="main-article" style="background-image: url();">
				<div class="main-article__content">
          <nav class="header">
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
              <li easy-toggle="#modalWin" easy-class="show" easy-rcoe class="header-menu_img"><a href="./Регистрация.php" class="header-menu_img"><img src="img/Login.png"></a></li>
              <?php else: ?> 
                <li class="header-menu_img"><a href="./Профиль.php" class="header-menu_img"><img src="img/profile.png"></a></li>
              <?php endif; ?> 
                </ul>
          </nav>
					<p class="main-article__paragraph"></p>
				</div>
				<div class="copy">© SDNP.inc</div>
			</article>

		</div>
	</div>

  <div id="modalWin" class="modal">
      <div class="modal-window">
        <h1 class="modal-title">Авторизация</h1>
        <form action="php/auth.php" method="post" class="modal-menu">
            <input type="text" class="form-control" name="mail" id="mail" placeholder="Введите почту">
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


</body>
</html>