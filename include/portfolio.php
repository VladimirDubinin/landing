<section id="portfolio">
    <h3>Портфолио</h3>
    <p>Ниже представлены некоторые проекты, в разработке которых я принимал участие.</p>

    <div class="portfolio-slider swiper">
        <div class="swiper-navigation">
            <div class="swiper-button swiper-button-prev">
                <svg  class="icon-36" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path fill="currentColor" d="M41.4 297.4C28.9 309.9 28.9 330.2 41.4 342.7L169.4 470.7C181.9 483.2 202.2 483.2 214.7 470.7C227.2 458.2 227.2 437.9 214.7 425.4L141.3 352L576 352C593.7 352 608 337.7 608 320C608 302.3 593.7 288 576 288L141.3 288L214.7 214.6C227.2 202.1 227.2 181.8 214.7 169.3C202.2 156.8 181.9 156.8 169.4 169.3L41.4 297.3z"/></svg>
            </div>
            <div class="swiper-button swiper-button-next">
                <svg class="icon-36" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><path fill="currentColor" d="M598.6 342.6C611.1 330.1 611.1 309.8 598.6 297.3L470.6 169.3C458.1 156.8 437.8 156.8 425.3 169.3C412.8 181.8 412.8 202.1 425.3 214.6L498.7 288L64 288C46.3 288 32 302.3 32 320C32 337.7 46.3 352 64 352L498.7 352L425.3 425.4C412.8 437.9 412.8 458.2 425.3 470.7C437.8 483.2 458.1 483.2 470.6 470.7L598.6 342.7z"/></svg>
            </div>
        </div>

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="project">
                    <div class="slider-wrapper">
                        <div class="project-slider swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="project-img" src="/src/images/ac/2.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="project-img" src="/src/images/ac/3.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="project-img" src="/src/images/ac/4.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-desc">
                        <h6>Academic Calendar</h6>
                        <p>
                            Сервис для составления расписаний занятий в Gurnick Academy.
                            Стек проекта - <b>Laravel & Vue.js</b>.
                        </p>
                        <p>Особенности проекта:</p>
                        <ul>
                            <li>синхронизация данных о группах и курсах со сторонним сервисом по API;</li>
                            <li>составление расписаний на основе актуальных данных;</li>
                            <li>функционал согласования расписаний;</li>
                            <li>система ролей и прав;</li>
                            <li>возможность авторизации через сторонний сервис с помощью JWT;</li>
                            <li>для программирования чата использовалась библиотека Laravel WebSockets;</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="project">
                    <div class="slider-wrapper">
                        <div class="project-slider swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="project-img" src="/src/images/federation/1.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="project-img" src="/src/images/federation/2.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="project-img" src="/src/images/federation/3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-desc">
                        <h6>Комплекс «Федерация»</h6>
                        <p>Одностраничный сайт жилого комплекса «Федерация» в г. Самара.</p>
                        <p>В процессе разработки этого проекта были выполнены следующие задачи:</p>
                        <ul>
                            <li>адаптивная вёрстка сайта по макету;</li>
                            <li>программирование клиентской части - анимация появдения блоков, слайдеры, модальные формы обратной связи;</li>
                            <li>импорт данных о квартирах по API из сервиса Profitbase;</li>
                            <li>программирование модуля выбора этажа и квартиры;</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="project">
                    <div class="slider-wrapper">
                        <div class="project-slider swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="project-img" src="/src/images/lbtd/1.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="project-img" src="/src/images/lbtd/2.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="project-img" src="/src/images/lbtd/3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-desc">
                        <h6>Парсер цен</h6>
                        <p>
                            Веб-приложение осуществляет мониторинг цен на электронику и бытовую технику на разных сайтах.
                            При разработке использовался стек <b>Laravel & Vue.js</b>. Реализован сайт по принципу SPA.
                        </p>
                        <p>
                            В процессе разработки была создана кастомная административная панель сайта, которая позволяет вести базу данных товаров,
                            сайтов и регионов для управления парсингом и просматривать список отчётов.
                            Разработан механизм обхода защиты сайтов от парсинга с помощью библиотеки Headless Chrome и
                            реализована возможность выгрузки отчетов в файл Excel.
                        </p>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="project">
                    <div class="slider-wrapper">
                        <div class="project-slider swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="project-img" src="/src/images/sudrf/1.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="project-img" src="/src/images/sudrf/3.jpg" alt="">
                                </div>
                                <div class="swiper-slide">
                                    <img class="project-img" src="/src/images/sudrf/4.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="project-desc">
                        <h6>Такие дела</h6>
                        <p>
                            Сервис для отслеживания изменений по судебным делам.
                            Разрабатывался в команде с другими программистами на <b>Laravel и Vue.js</b>.
                        </p>
                        <p>В перечень моих задач входило:</p>
                        <ul>
                            <li>программирование личного кабинета, формы регистрации и авторизации;</li>
                            <li>программирование модуля отслеживания дел - создание отслеживаний и просмотр найденных дел;</li>
                            <li>создание механизма регулярного поиска новых дел по указанным параметрам;</li>
                            <li>создание траницы сохранённых дел и карточки дела;</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
