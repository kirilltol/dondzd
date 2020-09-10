<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Донецкая детская железная дорога</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style_about.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <script>
        $(function() {
            $('.bxslider').bxSlider({
                mode: 'fade',
                auto: true,
                pause: 4000,
                maxSlides: 4,
                captions: true,
                slideWidth: 600,
                stopAutoOnClick: true

            });
        });

    </script>
    <script>
        $(window).scroll(function() {
            if ($(window).scrollTop() > 20) {
                document.getElementById('top').style.display = "flex";
            }

        });

    </script>
    <script>
        $(window).scroll(function() {
            if ($(window).scrollTop() > 590) {
                $('#top-2').show()
                document.getElementById('top-2').style.display = "flex";
            }

        });

    </script>
</head>

<body>
    <?php 
require 'header.php'; ?>
    <main>
        <div class="title">
            <h3>История</h3>
        </div>
        <div class="about">

            <div class="img">
                <div class="bxslider">
                    <div><img src="about-1.jpg" title=""></div>
                    <div><img src="about-2.jpg" title=""></div>
                    <div><img src="about-3.jpg" title=""></div>
                    <div><img src="about-4.jpg" title=""></div>
                </div>
            </div>
            <div class="text">
                <p>

                    Донецкая Детская железная дорога появилась благодаря идее и настойчивости многолетнего руководителя Донецкой железной дороги, легендарного для нее, – Виктора Васильевича Приклонского – и его друзей. «Я думаю, что затраты окупятся. На дороге огромный дефицит в кадрах, где-то 20%. А тот, кто к «железке» прикипел с детства, как правило, остается ей верен до конца», – говорил о необходимости создания такой дороги он.</p>
                <p>Строительство началось 4 марта 1971 года и велось ударными темпами силами дончан и работников Донецкой железной дороги, большинство из которых были молодежью и комсомольцами.</p>
                <p>Благодаря добросовестному труду, в уютном и живописном уголке наше города – парке Ленинского комсомола, 19 мая 1972 года была открыта Малая Донецкая железная дорога.</p>


            </div>
        </div>
        <div id="top" class="title-2">
            <h3>Станции</h3>
        </div>
        <div class="about">

            <div class="text-2">
                <p>

                    Детская железная дорога имеет в своем распоряжении две станции: «Пионерская» и «Шахтерская».</p>
                <p>Станция «Пионерская» оборудована маршрутно-релейной централизацией. В здании вокзала расположены: зал ожидания, касса, учебные и административные кабинеты, кафе. </p>
                <p>Станция «Шахтерская» оборудована ручными стрелками, что позволяет улучшить процесс обучения юных железнодорожников по курсу путевого хозяйства. На станции расположены: Музей Донецкой Детской железной дороги, локомотивное депо и учебный полигон. </p>
                <p>Музей Донецкой Детской железной дороги был открыт 1 июня 2006 года. Расположен музей в вокзале станции «Шахтерская». Коллекция музея активно пополняется новыми экспонатами и уже насчитывает более 1000 экземпляров.</p>


            </div>
            <div class="img-2">
                <div class="bxslider">
                    <div><img src="about-5.jpg" title=""></div>
                    <div><img src="about-6.jpg" title=""></div>
                    <div><img src="about-7.jpg" title=""></div>
                    <div><img src="about-8.jpg" title=""></div>
                </div>

            </div>
        </div>
        <div id="top-2" class="title-3">
            <h3>Практика</h3>
        </div>
        <div class="about not-bottom">

            <div class="img">
                <div class="bxslider">
                    <div><img src="about-9.jpg" title=""></div>
                    <div><img src="about-10.jpg" title=""></div>
                    <div><img src="about-11.jpg" title=""></div>
                    <div><img src="about-12.jpg" title=""></div>
                </div>
            </div>
            <div class="text-3">
                <p>

                    С мая по октябрь, во время летней учебно-производственной практики, юные железнодорожники закрепляют на рабочих местах знания и умения, приобретенные под руководством опытных инструкторов производственного обучения. </p>
                <p>Летняя практика — это то, чего так ждут мальчишки и девчонки малой магистрали. Именно она позволяет ребятам в полной мере показать свои навыки и умения, что были приобретены во время зимней теории. Главная особенность Детской железной дороги состоит в том, что юные воспитанники непосредственно принимают участие в перевозке пассажиров. Детская железная дорога - это не игра, а настоящая самостоятельная и увлекательная работа, необходимая и маленьким, и взрослым пассажирам. &#160; &#160; &#160; Юные&#160;&#160; &#160; &#160; &#160; &#160;  железнодорожники </p>



            </div>

        </div>
        <div class="dop-text">
            <p> получают навыки работы основных железнодорожных профессий: машиниста тепловоза, помощника машиниста тепловоза, дежурного по станции, оператора при ДСП, проводника вагона, ревизора дежурного стрелочного поста, составителя вагонов, диктора и других.</p>
        </div>
    </main>
    <?php 
require 'footer.php'; ?>
</body>

</html>
