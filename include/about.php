<section id="about">
    <div class="biography">
        <h3>Обо мне</h3>
        <div class="bio-wrapper">
            <div class="description">
                <p class="text-mobile">
                    <?php
                    $originalTime = new DateTime("2021-07-01");
                    $targetTime = new DateTime("now");
                    $interval = $originalTime->diff($targetTime);
                    $stage = $interval->y . ' ' . determ_word_end($interval->y, ['год', 'года', 'лет']);
                    ?>
                    Привет, я Fullstack-разработчик из Ростова-на-Дону с опытом
                    коммерческой разработки веб-приложений <?= $stage ?> на языках программирования <b>PHP</b> и <b>JS</b>.
                </p>
                <p class="text-mobile">
                    Мой основной стек - <b>Laravel</b> для построения серверной части
                    и <b>Vue.js</b> для пользовательских интерфейсов.
                </p>
                <p class="text-mobile m-0">
                    Имею хорошее понимание принципов ООП, SOLID и REST API.
                    Также использую в работе такие инструменты, как Docker, GitHub, СУБД MySQL, PostgreSQL и Redis.
                </p>
            </div>
            <div class="short text-mobile">
                <div><span class="marker shad">Имя:</span> Владимир Дубинин</div>
                <div><span class="marker shad">Специальность:</span> Fullstack</div>
                <div><span class="marker shad">Основной стек:</span> Laravel & Vue.js</div>
                <div><span class="marker shad">Стаж работы:</span> <?= $stage ?></div>
                <div><span class="marker shad">Страна:</span> Россия</div>
                <div><span class="marker shad">Город:</span> Ростов-на-Дону</div>
            </div>
        </div>
    </div>
    <div class="experience">
        <h4>Образование и опыт работы</h4>
        <div class="stage">
            <div class="item">
                <div class="item-info">
                    <h6>РГСУ</h6>
                    <p><b>Бакалавриат</b></p>
                    <p>Факультет «Информационно-экономические системы»</p>
                    <p>09.04.02 «Информационные системы и технологии»</p>
                </div>
                <div class="item-time">
                    <div class="years">2015 - 2019</div>
                </div>
            </div>
            <div class="item">
                <div class="item-info">
                    <h6>ДГТУ</h6>
                    <p><b>Магистратура</b></p>
                    <p>Институт информационных систем и технологий</p>
                    <p class="add-inf">
                        <svg class="icon-18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640">
                            <path fill="currentColor"
                                  d="M208.3 64L432.3 64C458.8 64 480.4 85.8 479.4 112.2C479.2 117.5 479 122.8 478.7 128L528.3 128C554.4 128 577.4 149.6 575.4 177.8C567.9 281.5 514.9 338.5 457.4 368.3C441.6 376.5 425.5 382.6 410.2 387.1C390 415.7 369 430.8 352.3 438.9L352.3 512L416.3 512C434 512 448.3 526.3 448.3 544C448.3 561.7 434 576 416.3 576L224.3 576C206.6 576 192.3 561.7 192.3 544C192.3 526.3 206.6 512 224.3 512L288.3 512L288.3 438.9C272.3 431.2 252.4 416.9 233 390.6C214.6 385.8 194.6 378.5 175.1 367.5C121 337.2 72.2 280.1 65.2 177.6C63.3 149.5 86.2 127.9 112.3 127.9L161.9 127.9C161.6 122.7 161.4 117.5 161.2 112.1C160.2 85.6 181.8 63.9 208.3 63.9zM165.5 176L113.1 176C119.3 260.7 158.2 303.1 198.3 325.6C183.9 288.3 172 239.6 165.5 176zM444 320.8C484.5 297 521.1 254.7 527.3 176L475 176C468.8 236.9 457.6 284.2 444 320.8z"/>
                        </svg>
                        Диплом с отличием
                    </p>
                </div>
                <div class="item-time">
                    <div class="years">2019 - 2021</div>
                </div>
            </div>
            <div class="item">
                <div class="item-info">
                    <h6>IT-Enterprise</h6>
                    <p><b>Fullstack-разработчик</b></p>
                    <p>Основной стек: Laravel, Vue.js, Bitrix.</p>
                </div>
                <div class="item-time">
                    <div class="years">2021 - 2026</div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once 'skills2.0.php'; ?>

</section>
