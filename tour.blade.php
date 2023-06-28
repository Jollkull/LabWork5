<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/styles.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Tachivka - Екскурсії</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="nav">
                <img src="img/logo.png" alt="">
                <div class="nav__mobile"><i class="fa-solid fa-bars"></i></div>
                <ul class="nav__list">
                    <li class="nav__list-item"><a href="/">Головна</a></li>
                    <li class="nav__list-item"><a href="/history">історія</a></li>
                    <li class="nav__list-item"><a href="/gallery">Галерея</a></li>
                    <li class="nav__list-item"><a href="#">Екскурсії</a></li>
                    <li class="nav__list-item"><a href="#footer">Контакти</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="main">
        <section class="tour" id="tour">
            <div class="container">
                <h2 class="tour__title">Екскурсії</h2>
                <div class="tour__content">
                    <div class="tour__card_list">
                        @foreach($tours as $tour)
                        <div class="tour__card">
                            <div class="tour__card_title">
                                <p>{{$tour->tour_name}}</p>
                                <p>{{$tour->tour_price}} грн</p>
                            </div>
                            <img src="{{asset($tour->tour_img)}}" alt="">
                            <p class="tour__card_description">{{$tour->tour_text}}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>
    <hr>
    <footer class="footer" id="footer">
        <div class="container">
            <div class="footer__content footer__content_left">
                <img src="img/logo.png" alt="">
                <p>Найважливіше в нашій роботі - дарувати радість, щастя та задоволення кожної хвилини, кожного дня</p>
                <p>Команда професіоналів не дасть вам сумувати, наповнять ваші дні радістю та цікавістю</p>
            </div>
            <div class="footer__content">
                <h3>Контакти</h3>
                <p>+380509523582</p>
                <p>shpota.vladislav@gmail.com</p>
            </div>
            <div class="footer__content">
                <h3>Ми в соцмережах</h3>
                <div class="footer__social_list">
                    <div class="footer__social">
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    </div>
                    <div class="footer__social">
                        <a href="#"><i class="fa-brands fa-telegram"></i></a>
                        <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                        <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/main.js"></script>
</body>
</html>