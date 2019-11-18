<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="./css/style.css">

    <title>Document</title>
</head>

<body>
    <section class="main-firstScreen">
        <div class="firstScreen-banner">
            <?php include ('./pages/main/menu.php') ?>
            <div class="firstScreen-txt">
                <div class="container">
                    <div class="firstScreen-promo">
                        <div class="firstScreen-afisha">
                            <div class="bulk-text">
                                <div class="bulk-text__bulk">Bulk</div>
                                <div class="bulk-text__title">
                                    Облачные виджеты для сайтов и интернет-магазинов
                                </div>
                            </div>
                            <div class="firstScreen-afisha-feedback">
                                <div class="firstScreen-afisha-feedback-review">
                                    <div class="card">
                                        <div class="card-title">
                                            <img src="./img/review.png" alt="">
                                            <div class="card-title__text">Отзывы <br> и рейтинг</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="card-text">
                                                <p>
                                                    Перед покупкой товара в интернете <b>95% клиентов изучают отзывы.</b> <br> Отзывы помогут определиться с выбором, повысить доверие и увеличить количество покупок <br><br>
                                                    <span><img class="accept_ICON" src="./img/accept_ICON.svg" alt=""><b>Сниппет в поисковой выдаче</b></span><br>
                                                </p>
                                                <a class="card-button" href="">Подробнее о виджете</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-title">
                                            <img src="./img/comment.png" alt="">
                                            <div class="card-title__text">Комментарии</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="card-text">
                                                <p>
                                                    Быстрый способ связи с потенциальными и текущими клиентами. <br><br>
                                                    <span><img class="accept_ICON" src="./img/accept_ICON.svg" alt=""><b>Модерация перед публикацией</b></span><br>
                                                    <span><img class="accept_ICON" src="./img/accept_ICON.svg" alt=""><b>Уведомления в админке</b></span><br>
                                                    <span><img class="accept_ICON" src="./img/accept_ICON.svg" alt=""><b>База всех сообщений юзера</b></span><br>
                                                </p>
                                                <a class="card-button" href="">Подробнее о виджете</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.firstScreen-afisha-feedback-review -->
                            </div>
                            <!-- /.firstScreen-afisha-feedback -->
                        </div>
                        <!-- /.firstScreen-afisha -->
                        <a href="">
                            <div class="afisha-trial-btn">
                                <div class="afisha-trial-btn-inner">
                                    14 дней <br>
                                    <b>бесплатно</b>
                                    <span class="afisha-trial-try">попробовать</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.firstScreen-txt -->
        </div>
        <!-- /.firstScreen-banner -->
        <div class="inform-section">
            <div class="container">
                <div class="inform-section-wrapper">
                    <div class="inform-section-feature">
                        <div class="feature-header">
                            <img src="./img/rating.png" alt="">
                        </div>
                        <div class="feature-body">
                            <div class="inform-section-feature__title">
                                Улучшает позиции в
                                <span class="colorBlue">G</span>oogle и <span class="colorRed">Я</span>ндекс
                            </div>
                            <div class="inform-section-feature__text">
                                Комментарии, оценки и отзывы <b>индексируются поисковиками</b>
                            </div>
                        </div>

                    </div>
                    <div class="inform-section-feature">
                        <div class="feature-header">
                            <img src="./img/profile.png" alt="">
                        </div>
                        <div class="feature-body">
                            <div class="inform-feature__title">
                                Собирает базу <br>
                                пользователей
                            </div>
                            <div class="inform-feature__text">
                                Подробная база о каждом пользователе, <b>аналитика, модерирование</b>
                            </div>
                        </div>
                    </div>
                    <div class="inform-section-feature">
                        <div class="feature-header">
                            <img src="./img/trial.png" alt="">
                        </div>
                        <div class="feature-body">
                            <div class="inform-feature__title">
                                14 дней <br>
                                бесплатный период
                            </div>
                            <div class="inform-feature__text">
                                С видео-обучением по установке и модерированию. Полный доступ ко всему функционалу виджета
                            </div>
                        </div>
                    </div>
                    <div class="inform-section-feature">
                        <div class="feature-header">
                            <img src="./img/tariffPlan.png" alt="">
                        </div>
                        <div class="feature-body">
                            <div class="inform-feature__title">
                                Изменить тарифный план <br>
                                можно в любой момент
                            </div>
                            <div class="inform-feature__text">
                                Увеличить или уменьшить стоимость за счёт подключения/отключения нужных функций можно в любой день использования виджета
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.inform-section-wrapper -->
            </div>
        </div>
        <!-- /.inform-section -->

    </section>
    <? include('./pages/main/user-iteraction.php') ?>
    <? include('./pages/main/tools.php') ?>
    <? include('./pages/main/footer.php') ?>

</body>

</html>
