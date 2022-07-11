
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <?php require 'db.php'; ?>
    
    <link rel="icon" type="image/png" sizes="16x16"  href="img/favicon-16x16.png">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
    <title>Document</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">

    </script>
    <svg style="display:none;">
        <symbol id="facebook" viewBox="0 0 50 50">
          <g>
            <path d="M25,3C12.85,3,3,12.85,3,25c0,11.03,8.125,20.137,18.712,21.728V30.831h-5.443v-5.783h5.443v-3.848 c0-6.371,3.104-9.168,8.399-9.168c2.536,0,3.877,0.188,4.512,0.274v5.048h-3.612c-2.248,0-3.033,2.131-3.033,4.533v3.161h6.588 l-0.894,5.783h-5.694v15.944C38.716,45.318,47,36.137,47,25C47,12.85,37.15,3,25,3z" /> </g>
        </symbol>
        <symbol id="instagram" viewBox="0 0 64 64">
          <g>
            <path d="M 21.580078 7 C 13.541078 7 7 13.544938 7 21.585938 L 7 42.417969 C 7 50.457969 13.544938 57 21.585938 57 L 42.417969 57 C 50.457969 57 57 50.455062 57 42.414062 L 57 21.580078 C 57 13.541078 50.455062 7 42.414062 7 L 21.580078 7 z M 47 15 C 48.104 15 49 15.896 49 17 C 49 18.104 48.104 19 47 19 C 45.896 19 45 18.104 45 17 C 45 15.896 45.896 15 47 15 z M 32 19 C 39.17 19 45 24.83 45 32 C 45 39.17 39.169 45 32 45 C 24.83 45 19 39.169 19 32 C 19 24.831 24.83 19 32 19 z M 32 23 C 27.029 23 23 27.029 23 32 C 23 36.971 27.029 41 32 41 C 36.971 41 41 36.971 41 32 C 41 27.029 36.971 23 32 23 z" /> </g>
        </symbol>
        <symbol id="telegram" viewBox="0 0 48 48">
          <g>
            <path d="M24 4A20 20 0 1 0 24 44A20 20 0 1 0 24 4Z" />
            <path fill="#fff" d="M33.95,15l-3.746,19.126c0,0-0.161,0.874-1.245,0.874c-0.576,0-0.873-0.274-0.873-0.274l-8.114-6.733 l-3.97-2.001l-5.095-1.355c0,0-0.907-0.262-0.907-1.012c0-0.625,0.933-0.923,0.933-0.923l21.316-8.468 c-0.001-0.001,0.651-0.235,1.126-0.234C33.667,14,34,14.125,34,14.5C34,14.75,33.95,15,33.95,15z" />
            <path d="M23,30.505l-3.426,3.374c0,0-0.149,0.115-0.348,0.12c-0.069,0.002-0.143-0.009-0.219-0.043 l0.964-5.965L23,30.505z" />
            <path d="M29.897,18.196c-0.169-0.22-0.481-0.26-0.701-0.093L16,26c0,0,2.106,5.892,2.427,6.912 c0.322,1.021,0.58,1.045,0.58,1.045l0.964-5.965l9.832-9.096C30.023,18.729,30.064,18.416,29.897,18.196z" /> </g>
        </symbol>
        <symbol id="telegram2" viewBox="0 0 48 48">
          <g>
            <path d="M24 4A20 20 0 1 0 24 44A20 20 0 1 0 24 4Z" />
            <path fill="rgb(60, 56, 56)" d="M33.95,15l-3.746,19.126c0,0-0.161,0.874-1.245,0.874c-0.576,0-0.873-0.274-0.873-0.274l-8.114-6.733 l-3.97-2.001l-5.095-1.355c0,0-0.907-0.262-0.907-1.012c0-0.625,0.933-0.923,0.933-0.923l21.316-8.468 c-0.001-0.001,0.651-0.235,1.126-0.234C33.667,14,34,14.125,34,14.5C34,14.75,33.95,15,33.95,15z" />
            <path d="M23,30.505l-3.426,3.374c0,0-0.149,0.115-0.348,0.12c-0.069,0.002-0.143-0.009-0.219-0.043 l0.964-5.965L23,30.505z" />
            <path d="M29.897,18.196c-0.169-0.22-0.481-0.26-0.701-0.093L16,26c0,0,2.106,5.892,2.427,6.912 c0.322,1.021,0.58,1.045,0.58,1.045l0.964-5.965l9.832-9.096C30.023,18.729,30.064,18.416,29.897,18.196z" /> </g>
        </symbol>
      </svg>
</head>
<body>
    <header id="header" class="header__katalog">
        <div class="container">
            <nav class="header__inner">
                <div class="nav2">
                    <a href="">
                        <img class="nav__logo" data-scroll="#intro" src="img/logo.png" alt="logo">
                    </a>
                    <a class="nav__link" href="index.html">Головна</a>
                    <a class="nav__link" data-scroll="#footer" href="#">Контакти</a>
                    <!-- <form class="form" > 
                        <input type="text" name="text" class="search" placeholder="введіть запит">
                        <input type="submit" name="submit" class="submit" value="пошук">
                    </form> -->
                </div>
                <?php
                function searchform(){
                    global $connection;
                    echo '<form class="form"action="/search.php" method="post"> 
                        <input type="text" name="search" class="search" placeholder="введіть запит">
                        <input type="submit" href="search.php" name="submit" class="submit" value="пошук">
                    </form>';
                }
                ?>
                <!--<a class="basket" href="google.com" >-->
                <!--    <img class="basket__img" src="img/basket__icon.png" alt="кошик">-->
                <!--    <div class="basket__title" href="#">кошик</div>-->
                <!--</a>-->
            </nav>
        </div>    
    </header>
    <div class="category">
        <div class="intro" id="intro">
            <div class="container">
                <div class="category__block">
                    <div class="category__title">
                        <a href="index.html">
                            <img class="katalog__logo" src="img/katalog__logo.png" alt="katalog__logo">
                        </a>
                        <div class="kategory__php2">
                                    вибірка
                                </div>
                    </div>
                    <div class="category__elements">
                        
                        <?php
                        if(isset($_POST['submit'])){
                            $search = $_POST['search'];
                            $query = mysqli_query($connect,"select * from single where title like '%$search%'");
                            return $query;
                   }
                        foreach ($query as $singles) { ?>
                        
                                               
                        
                            <div class="category__element" data-id="<?=$singles['id']?>">
                                <a class="element__lin" href="buy.php?id=<?php echo $singles['id']; ?>">
                                <img class="element__img" src="<?php echo $singles["img"]?>" alt="">
                                
                                <div class="element__title">
                                    <?php echo $singles["title"]?>
                                </div>
                                <div class="elements__subtitle">
                                    <?php echo $singles["subtitle"]?>
                                </div>
                                <div class="line3"></div>
                                <span class="element__price">
                                   <?php echo $singles["price"]?>
                                </span>
                                </a>
                            </div>
                        
                      <?php
                        }
                        ?> 
                    </div>
                </div>
            </div>
        </div>
    <div class="footer" id="footer">
            <div class="info">
                <div class="container">
                    <div class="info__block">
                        <div class="about2">
                            <div class="about__block">
                                <img class="img__geo" src="img/footer4.png" alt="icon">
                                <span class="geo">Магазин «Лендліз»,</span>
                            </div>
                            <div class="about__block">
                                вулиця Персенківка, 17,
                            </div>
                            <div class="about__block">
                                м. Львів, 79026
                            </div>
                        </div>
                        <div class="about2">
                            <div class="about__block">
                                <img class="footer__img" src="img/footer3.png" alt="icon">
                                <a class="phone__number" href="tel:+380971419444">+380971419444 </a>
                            </div>
                            <div class="about__block">
                                <img class="footer__img" src="img/footer3.png" alt="icon">
                                <a class="phone__number" href="tel:+380971419444">+380971419444 </a>
                            </div> 
                            <div class="about__block">
                                <img class="footer__img" src="img/footer3.png" alt="icon">
                                <a class="phone__number" href="tel:+380971419444">+380971419444 </a>
                            </div>
                        </div>
                        <div class="about2">
                            <div class="about__block">
                                <img class="footer__img" src="img/footer2.png" alt="icon">
                                <span>пн. - пт.</span>
                            </div>
                            <div class="about__block">
                                <img class="footer__img" src="img/footer2.png" alt="icon">
                                <span>10:00 - 18:00</span>
                            </div>
                            <div class="about__block">
                                <img class="footer__img" src="img/footer2.png" alt="icon">
                                <span>сб. - нд. вихідний</span>
                            </div>
                        </div>
                        <div class="right">
                            <div class="right__title">
                                
                                <a class="mail" href="mailto:mail@lendliz.com.ua">mail@lendliz.com.ua</a>
                            </div>
                            <div class="social__sets">
                                <a class="social__sets__links" target="_blank" href="https://www.facebook.com">
                                    <svg class="social__icon">
                                        <use xlink:href="#facebook"></use>
                                    </svg>
                                </a>
                                <a class="social__sets__links" target="_blank" href="https://www.instagram.com">
                                    <svg class="social__icon">
                                        <use xlink:href="#instagram"></use>
                                    </svg>
                                </a>
                                <a class="social__sets__links" target="_blank" href="https://web.telegram.org/k/">
                                    <svg class="social__icon">
                                        <use xlink:href="#telegram2"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="line2"></div>
            <div class="footer__copyright">
                <p>copyright © 2022 LendLiz All Rights Reserved</p> Made with <img class="hurt" src="img/hurt.png" alt="hurt"> <span>by Denis Marienkow</span> 
            </div>
        </div>
    <script src="app.js"></script>
</body>
</html>
