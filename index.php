<?php

namespace app;

require_once("admin/DBUtils.php");

$images = DBUtils::getAllImages();

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Агенство">
    <meta name="keywords" content="">
    <title>Sport-Pole Dance Украины</title>

    <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700&amp;subset=cyrillic" rel="stylesheet">
    <meta name="theme-color" content="#ffffff">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <script src="js/jquery.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <ul id="mobile_nav" class="mobile-hidden">
        <li class="active"><a href="index.php">Главная</a></li>
        <li><a href="atestation-1.html">Аттестация 1 ступень</a></li>
        <li><a href="atestation-2.html">Аттестация 2 ступень</a></li>
        <li><a href="convention.html">Конвенция</a></li>
        <li class="active"><a href="registration.html">Регистрация</a></li>
        <li class="active"><a href="#contacts" class="scroll">Контакты</a></li>

        <div id="toggle_nav" onclick="showNav();"><img src="img/menu-button.svg" alt=""></div>
    </ul>
    
    <div class="body-wrap">
        <div class="container-md">
            <nav class="navbar" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Главная</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Аттестация</a>
                            <ul class="dropdown-menu">
                                <li><a href="atestation-1.html">Аттестация 1 ступень</a></li>
                                <li><a href="atestation-2.html">Аттестация 2 ступень</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="convention.html" class="dropdown-toggle" data-toggle="dropdown">Конвенция</a>
                            <ul class="dropdown-menu">
                                <li><a href="convention.html">Мастер Классы и семинары</a></li>
                            </ul>
                        </li>
                        <li class="active"><a href="registration.html">Регистрация</a></li>
                        <li class="active"><a href="#contacts" class="scroll">Контакты</a></li>
                    </ul>
                </div>
            <!-- /.container-fluid -->
            </nav>
        </div>
    </div>
    
    <div class="main"></div>
    
    <div class="blue-block intro-blue-block">
        <div class="blue-block-psevdo"></div>
        <img class="logo-holder" src="img/logo.png" alt="">
        <span class="popup-up">«АТТЕСТАЦИЯ ИНСТРУКТОРОВ POLE SPORT-POLE DANCE УКРАИНЫ»,<br>“UKRAINIAN POLE Convention”, мастер-классы и тренинги!</span>
    </div>
    
    <div class="intro-block">
        <div class="container-md flex-btw">
            <div class="intro-info-holder">
                <p class="mar-bt-2 popup-up">Всеукраинская Федерация Спорта на пилоне проводит обучающие курсы для ТРЕНЕРОВ по pole sport/ dance</p>
                <p class="popup-up popup-delayed-4">Уже более 5 лет мы занимаемся Вашим развитием, <br>а Вы СОВЕРШЕНСТВУЕТЕСЬ С НАМИ!</p>
                
                <div class="intro-points-holder space-btw mar-tp-3">
                    <div class="intro-point popup-up popup-delayed-6">
                        <img class="mar-bt-2" src="img/1.png" alt="" width="150px">
                        <span>Хочешь быть грамотным тренером?</span>
                    </div>
                    <div class="intro-point popup-up popup-delayed-7">
                        <img class="mar-bt-2" src="img/2.png" alt="" width="150px">
                        <span>Хочешь освоить новую профессию?</span>
                    </div>
                    <div class="intro-point popup-up popup-delayed-8">
                        <img class="mar-bt-2" src="img/3.png" alt="" width="150px">
                        <span>Хочешь всегда быть в форме, здоровым и красивым?</span>
                    </div>
                </div>
            </div>
            <div class="intro-image-holder popup-up">
                <img src="img/intro_photo.png" alt="" width="100%">
                <img class="font-image" src="img/font.png" alt="" width="100%">
            </div>
        </div>
        <div class="container-md pad-tp-5">
            <div class="credit-info">
                <span class="popup-up popup-delayed-2">С каждым днем на рынок выходят все больше студий! Это Ваш шанс, получить ключ к грамотной методике преподавания! Знаниям элементов, анатомии, физиологии, психологии спорта не только взрослых, но и детей!</span>
                <span class="lg-blue popup-up popup-delayed">Pole sport не стоит на месте</span>
            </div>
            <div class="flex-btw padding-const">
                <div class="poetry-text">
                    <span class="popup-up">Как же научить, и не навредить?<br> Грамотно объяснить или<br> вдохновить?<br> Надежно страховать,<br> первую помощь оказать?!<br> Все элементы знать,<br> и правильно  исполнять?!<br> Ученика не обижать,<br> этику соблюдать!?<br> Быть на шаг вперед – <br>спортсменов развивать!<br> Если развиваешься –ты!<br> Пополни наши ряды!<br> Стань профессиональном – <br>осуществи мечты!</span>
                    <span>Ольга Полищук</span>
                </div>
                <div class="poetry-image"><img src="img/poetry_girls.jpg" alt="" width="100%"></div>
            </div>
        </div>
    </div>
    
    <div class="info-block test_1">
        <div class="blue-block">
            <span class="popup-up">Обучающий курс для тренеров<br> «АТТЕСТАЦИЯ ИНСТРУКТОРОВ POLE SPORT-POLE DANCE УКРАИНЫ»,<br> 1 ступень!</span>
        </div>
        <div class="container-md flex-btw">
            <div class="course-image popup-up"><img src="img/girls.jpg" alt="" width="100%"></div>
            <div class="course-text">
                <p>Самый основной курс для всех уровней подготовки!</p>
                
                <ul class="lessons-list">
                    <li class="popup-up">Анатомия и Физиология</li>
                    <li class="popup-up">Методика преподавания спорта на пилоне, страховка и безопасность</li>
                    <li class="popup-up">Правильный комплекс упражнений для подготовки тела с пилоном, а также расслабление после физических нагрузок (стретчинг)</li>
                    <li class="popup-up">Биомеханика и восстановление организма</li>
                    <li class="popup-up">Хореография</li>
                    <li class="popup-up">Детский pole sport</li>
                    <li class="popup-up">Подготовка спортсменов к соревнованиям</li>
                </ul>
            </div>
        </div>
        <div class="container-md flex-btw pad-hz-8 pad-bt-8">
            <ul class="checks-list bold-lg">
                <li><img src="img/checks.png" alt="" height="30px" class="popup-up popup-delayed-4"><span class="popup-up">30 часов насыщенной программы</span></li>
                <li><img src="img/checks.png" alt="" height="30px" class="popup-up popup-delayed-4"><span class="popup-up">Лучшие лекторы со всей Украины</span></li>
                <li><img src="img/checks.png" alt="" height="30px" class="popup-up popup-delayed-4"><span class="popup-up">Теория и практика</span></li>
                <li><img src="img/checks.png" alt="" height="30px" class="popup-up popup-delayed-4"><span class="popup-up">Выпущено более 100 профессиональных инструкторов</span></li>
                <li><img src="img/checks.png" alt="" height="30px" class="popup-up popup-delayed-4"><span class="popup-up">Проведено более 150 часов обучения</span></li>
                
                <div class="more-box popup-up"><a href="atestation-1.html"><span>Узнать подробнее...</span></a></div>
            </ul>
            <div class="contact-box popup-up">
                <div class="box-top"><span>Открыт новый набор на  «АТТЕСТАЦИЯ ИНСТРУКТОРОВ POLE SPORT – POLE DANCE УКРАИНЫ»</span></div>
                <div class="box-body">
                    <div><img src="img/time.png" alt="" height="30px"><span>8-11 февраля 2018</span></div>
                    <div><img src="img/price.png" alt="" height="30px"><span>4200 грн<br>3800 грн<br>(для членов ВФСП)</span></div>
                </div>
                <div class="box-bottom"><a href="https://goo.gl/forms/Erl3uMzZpm6xDSXx1" target="_blank">Подать заявку</a></div>
            </div>
        </div>
    </div>
    
    <div class="info-block test_2">
        <div class="blue-block">
            <span class="popup-up">«АТТЕСТАЦИЯ ИНСТРУКТОРОВ POLE SPORT – POLE DANCE УКРАИНЫ»<br> 2 СТУПЕНЬ</span>
        </div>
        <div class="container-md flex-btw">
            <div class="course-image"><img src="img/hugs.jpg" alt="" width="100%"></div>
            <div class="course-text">
                <p class="popup-up">Самый основной курс для всех уровней подготовки!</p>
                
                <ul class="lessons-list" align="justify">
                    <li class="popup-up popup-delayed-2">Первая в Украине Аттестация для студентов, желающих получить глубокие знания по методике преподавания спорта и танца на пилоне от Всеукраинской Федерации Спорта на Пилоне!</li>
                    <li class="popup-up popup-delayed-4">На курс принимаются абитуриенты - тренеры, которые сдали экзамен 1 СТУПЕНИ
                        <br><br>Возраст – не младше 16 лет</li>
                </ul>
            </div>
        </div>
        <div class="container-md flex-btw padding-box">
            <div class="contact-box zero popup-up">
                <div class="box-top box-top-2"><span>«АТТЕСТАЦИЯ ИНСТРУКТОРОВ POLE SPORT – POLE DANCE УКРАИНЫ»<br><br> ВТОРАЯ СТУПЕНЬ</span></div>
                <div class="box-body">
                    <div><img src="img/time.png" alt="" height="30px"><span>октябрь 2018 года</span></div>
                </div>
                <div class="box-bottom"><a target="_blank" class="hover-inactive">Подать заявку</a></div>
            </div>
            <div class="course-image-2 popup-up">
                <img src="img/reading.jpg" alt="" height="100%">
                <div class="more-box"><a href="atestation-2.html"><span>Узнать подробнее...</span></a></div>
            </div>
        </div>
    </div>
    
    <div class="info-block test_3">
        <div class="blue-block">
            <span class="popup-up">Интенсивный курс мастер классов “UKRAINIAN POLE Convention”</span>
        </div>
        <div class="container-md flex-btw">
            <div class="course-image"><img src="img/acrobat.jpg" alt="" width="100%"></div>
            <div class="course-text">
                <p class="popup-up">Самое ожидаемое мероприятие, для среднего и продвинутого уровня подготовки!</p>
                
                <ul class="lessons-list">
                    <li class="popup-up popup-delayed-2">14 часов Мастер классов от ЗВЕЗД Украинского Pole Dance</li>
                    <li class="popup-up popup-delayed-4">2 дня теории и практики</li>
                    <li class="popup-up popup-delayed-6">Самые свежие новинки</li>
                </ul>
                
                <p class="pad-hz-2 popup-up popup-delayed-8">В программе:  методика преподавания танца и акробатики на пилоне,  техника безопасности, новые трюковые элементы и комбинации, хореография в PD, стретчинг , и мн. др.</p>
            </div>
        </div>
        <div class="container-md flex-btw pad-hz-8 pad-bt-8">
            <ul class="checks-list bold-lg">
                <p class="mar-bt-4" align="center">Мы успешно провели:</p>
                
                <li><img src="img/checks.png" alt="" height="30px" class="popup-up" class="popup-up popup-delayed-4"><span class="popup-up">более 8 конвенций</span></li>
                <li><img src="img/checks.png" alt="" height="30px" class="popup-up popup-delayed-4"><span class="popup-up">80 классов</span></li>
                <li><img src="img/checks.png" alt="" height="30px" class="popup-up popup-delayed-4"><span class="popup-up">40 лекторов</span></li>
                <li><img src="img/checks.png" alt="" height="30px" class="popup-up popup-delayed-4"><span class="popup-up">250 счастливых участников</span></li>
                
                <div class="more-box popup-up"><a href="convention.html"><span>Узнать подробнее...</span></a></div>
            </ul>
            <div class="contact-box popup-up">
                <div class="box-top"><span>Открыт новый набор на ДЕВЯТУЮ «UKRAINIAN POLE Convention»</span></div>
                <div class="box-body">
                    <div><img src="img/time.png" alt="" height="30px"><span>10-11 апреля 2018</span></div>
                    <div><img src="img/price.png" alt="" height="30px"><span>2850 грн<br> 2550 грн<br> (для членов ВФСП)</span></div>
                </div>
                <div class="box-bottom"><a href="https://goo.gl/forms/XvXMOeLPS8Noff6r2" target="_blank">Подать заявку</a></div>
            </div>
        </div>
    </div>
    
    <div id="registration_block" class="registration-block">
        <div class="blue-block registration-header">
            <span class="popup-up">Зарегистрироваться</span>
        </div>
        
        <div class="container-md registration-btns-holder" align="center">
            <button class="red-btn popup-up popup-delayed-2"><a href="https://goo.gl/forms/Erl3uMzZpm6xDSXx1" target="_blank">Аттестация 1 ступень</a></button>
            <button class="red-btn popup-up popup-delayed-4"><a href="atestation-2.html">Аттестация 2 ступень</a></button>
            <button class="red-btn popup-up popup-delayed-6"><a href="https://goo.gl/forms/XvXMOeLPS8Noff6r2" target="_blank">Конвенция</a></button>
        </div>
    </div>
    
    <!-- Modal -->
    <div id="galleryLg" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <div class="photo-holder"><img id="galleryLgImg" src="" alt="" height="100%"></div>
                </div>
            </div>
      </div>
    </div>
    
    <div class="gallery-block">
        <div class="blue-block gallery-header">
            <span class="popup-up">Галерея</span>
        </div>
        
        <div class="container-md pad-tp-10">
            <div class="video-holder popup-up popup-delayed-4">
                <iframe width="648px" height="350px" src="https://youtu.be/z8kZHXtaxgw" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
            </div>
            
            <div id="galleryCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <?php
                    for($i = 0; $i < count($images); $i++)
                    {
                        if($i == 0)
                            echo '<div class="item active"><div class="flex-btw">';
                        elseif($i % 3 == 0)
                            echo '<div class="item"><div class="flex-btw">';

                        echo '<div><img class="gallery-img" data-toggle="modal" data-target="#galleryLg" src="admin/' . $images[$i]->getSrc() . '" alt=' . $images[$i]->getAlt() . '></div>';

                        if(($i + 1) % 3 == 0 || $i == count($images) - 1)
                            echo '</div></div>';
                    }

                    if(count($images) > 3)
                    {
                        echo '<a class="left carousel-control" href="#galleryCarousel" data-slide="prev">
                                <img src="img/arrow_lt.png" alt="">
                              </a>
                              <a class="right carousel-control" href="#galleryCarousel" data-slide="next">
                                <img src="img/arrow_rt.png" alt="">
                              </a>';
                    }
                ?>
                </div>
            </div>
            
            <div id="galleryCarouselM" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <?php
                    for($i = 0; $i < count($images); $i++)
                    {
                        if($i == 0)
                            echo '<div class="item active">';
                        else
                            echo '<div class="item">';
                        echo '<div class="flex-btw"><div>';
                        echo '<img src="admin/'. $images[$i]->getSrc() . '" alt=' . $images[$i]->getAlt() . '>';
                        echo '</div></div></div>';
                    }
                ?>
                </div>

                <a class="left carousel-control" href="#galleryCarouselM" data-slide="prev">
                    <img src="img/arrow_lt.png" alt="">
                </a>
                <a class="right carousel-control" href="#galleryCarouselM" data-slide="next">
                    <img src="img/arrow_rt.png" alt="">
                </a>
            </div>
        </div>
    </div>
    
    <footer>
        <a id="contacts">info.polesport@gmail.com</a>
    </footer>
</body>
    
<script src="js/mine.js"></script>

<script>
    $('ul.nav li.dropdown').hover(function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });
</script>

<script>
    $('.gallery-img').on('click', function () {
       var src = $(this).attr('src');
       $('#galleryLgImg').attr('src', src);
    });
</script>

<script>
    $('#galleryCarousel').carousel({
        pause: true,
        interval: false
    });
</script>

</html>