<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../css/style.css">

    <title>Document</title>
</head>

<body>
    <section class="auth">
        <a href="#openModalReg" style="color:#fff; font-size:30px;padding-right:30px;">Открыть модальное окно Регистрации</a>
        <a href="#openModalSign" style="color:#fff; font-size:30px;padding-right:30px;">Открыть модальное окно Логина</a>
        <div class="modal" id="openModalReg">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="auth-card">
                        <div class="auth-header">
                            Bulkfeedback
                            <a href="#close" title="Close" class="modal-close">×</a>
                        </div>
                        <div class="auth-body">
                            <h1 class="auth-body__title">Регистрация</h1>
                            <div class="auth-body__subtitle"><span class="text-bold">Заполните поля</span> или <span class="text-bold">выберите соцсеть</span></div>
                            <div class="auth-body-input">
                                <input type="e-mail" placeholder="E-mail">
                                <div class="input-container">
                                    <input type="password" placeholder="Пароль">
                                    <span class="pointer icon"><img src="../img/auth/view.png" alt=""></span>
                                </div>
                            </div>
                            <div class="auth-body__links">
                                <img src="../img/auth/1.png" alt="">
                                <img src="../img/auth/2.png" alt="">
                                <img src="../img/auth/3.png" alt="">
                                <img src="../img/auth/4.png" alt="">
                                <img src="../img/auth/5.png" alt="">
                            </div>
                            <div class="auth-body-btn">
                                <button class="skyblue" type="submit">Регистрация</button>
                            </div>
                            <div class="auth-body-rules">
                                Нажимая кнопку «РЕГИСТРАЦИЯ» я принимаю условия <br>
                                <a href="">политики конфиденциальности</a>
                            </div>
                        </div>
                        <div class="auth-footer">
                            Уже зарегистрированы? <span class="red pointer">Вход <img src="../img/auth/arrow.png" alt=""></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal" id="openModalSign">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="auth-card">
                        <div class="auth-header">
                            Bulkfeedback
                            <a href="#close" title="Close" class="modal-close">×</a>
                        </div>
                        <div class="auth-body">
                            <h1 class="auth-body__title">Вход</h1>
                            <div class="auth-body__subtitle"><span class="text-bold">Заполните поля</span> или <span class="text-bold">выберите соцсеть</span></div>
                            <div class="auth-body-input">
                                <input type="e-mail" placeholder="E-mail">
                                <div class="input-container">
                                    <input type="password" placeholder="Пароль">
                                    <span class="pointer icon"><img src="../img/auth/view.png" alt=""></span>
                                </div>
                            </div>
                            <span class="auth-body__forget pointer">Не помню пароль</span>
                            <div class="auth-body__links">
                                <img src="../img/auth/1.png" alt="">
                                <img src="../img/auth/2.png" alt="">
                                <img src="../img/auth/3.png" alt="">
                                <img src="../img/auth/4.png" alt="">
                                <img src="../img/auth/5.png" alt="">
                            </div>
                            <div class="auth-body-btn">
                                <button class="skyblue" type="submit">Войти</button>
                            </div>
                        </div>
                        <div class="auth-footer">
                            Ещё не зарегистрированы? <span class="red pointer"> Регистрация <img src="../img/auth/arrow.png" alt=""></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
