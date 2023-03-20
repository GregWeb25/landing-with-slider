<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rocket Business task</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/index.css">
</head>
<body>
<header class="main-header">
    <div class="main-header_container">
        <button id="mobilDropdownSwitch" class="mobil-dropdown_switch">
            <img src="./public/svg/switch_open.svg" alt="dropdown switch">
        </button>
        <div class="main-header_info-container">
            <div>
                <span class="logo-text">LOGO</span>
            </div>
            <div class="main-header_address-container">
                <i class="bi bi-geo-alt-fill main-header_geo-icon"></i>
                <span class="main-header_main-address-text">Ростов-на-Доону</span><br>
                <span class="main-header_secondary-address-text">ул. Ленина, 2б</span>
            </div>
        </div>
        <div class="main-header_info-container">
            <div class="main-header_info-phone-container">
                <img src="public/svg/whatsapp_turquoise.svg" class="main-header_whatsapp-icon" alt="phone">
                <span class="main-header_info-phone-text">+7(863) 000 00 00</span>
            </div>
            <span class="mobil_address">Ростов-на-Дону</span>
                <button id="btnFastAppointmentHeader" name="btnFastAppointment" class="btn-fast-appointment">
                    Записаться на приём
                </button>
        </div>
    </div>
</header>
<header class="nav-header">
    <div class="nav-header_container">
        <nav class="nav-header_navigation">
            <a href="">О клинике</a>
            <a href="">Услуги</a>
            <a href="">Специалисты</a>
            <a href="">Цены</a>
            <a class="abc" href="">Контакты</a>
        </nav>
    </div>
</header>
<nav id="mobilDropdownMenu" class="mobil-dropdown_menu__hidden">
    <nav class="nav-header_navigation">
        <a href="">О клинике</a>
        <a href="">Услуги</a>
        <a href="">Специалисты</a>
        <a href="">Цены</a>
        <a class="abc" href="">Контакты</a>
    </nav>
    <button id="btnFastAppointmentMobil"class="btn-fast-appointment outline">
        Записаться на приём
    </button>
</nav>
<section class="main-section">
    <div class="main-section_container">
        <div>
            <div class="main-section_content">
                <header>
                    Многопрофильная <br> клиника для детей <br> и взрослых
                </header>
                <article>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua
                </article>
            </div>
        </div>
        <img class="main-section_content-img" src="./public/images/photo.png" alt="фото офиса">
    </div>
</section>
<section id="sliderSection" class="slider-section">
    <?php
    require_once ("./php/form.php");
    require_once ("./php/db.php");
    $checkups = getCheckups();
    ?>
    <div id="slider" data-checkups="<?=$checkups ?>" class="slider">

    </div>
</section>
<footer>
    <div class="footer-container">
        <span class="logo-text">LOGO</span>
        <nav class="nav-header_navigation">
            <a href="">О клинике</a>
            <a href="">Услуги</a>
            <a href="">Специалисты</a>
            <a href="">Цены</a>
            <a class="abc" href="">Контакты</a>
        </nav>
        <div class="contacts">
            <a href="">
                <img src="./public/svg/instagram.svg" alt="instagram">
            </a>
            <a href="">
                <img src="./public/svg/whatsapp_green.svg" alt="whatsapp">
            </a>
            <a href="">
                <img src="./public/svg/telegram.svg" alt="telegram">
            </a>
        </div>
    </div>
</footer>
<div id="sandMail" class="sand-mail">
    <div id="sandMailBackground" class="sand-mail_background"></div>
    <form class="sand-mail_form" method="post" name="sendMailForm">
        <h3>Запись на приём</h3>
        <input type="text" name="name" id="name" placeholder="ФИО">
        <input type="text" name="number" id="number" placeholder="Номер полиса">
        <button type="submit" name="submit" id="submit" class="btn-fast-appointment">Отправить</button>
    </form>
</div>
</body>
<script src="js/dropdownMenu.js"></script>
<script src="js/slider.js"></script>
<script src="js/form.js"></script>
</html>