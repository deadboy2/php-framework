<main class="main order row">
    <div class="container">
        <div class="row">
            <div class="text col-lg-9 clearfix">

                <ul class="breadcrumbs col-xs-12">
                    <li><a href="#">Главная</a></li>
                    <li><span>Контакты</span></li>
                </ul>

                <h1 class="title col-xs-12">Регистрация на выставку</h1>

                <div class=" form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <p>* - Поля обязательны для заполнения.</p>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-pencil-square-o"></i>
                        </div>
                    </div>

                    <div class="form-bottom contact-form">
                        <form role="form" action="/" method="post">
                            <div class="form-group">
                                <label class="sr-only" for="contact-initials">Фио: *</label>
                                <input type="text" required name="initials" placeholder="Введите фио *"
                                       class="form-control" id="contact-initials">
                            </div>

                            <div class="form-group">
                                <label class="sr-only" for="contact-doljnost">Должность:</label>
                                <input type="text" name="doljnost" placeholder="Ваша должность" class="form-control"
                                       id="contact-doljnost">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="contact-phone">Телефон:</label>
                                <input type="tel" name="phone" placeholder="Ваш номер телефона" class="form-control"
                                       id="contact-phone">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="contact-email">E-mail:</label>
                                <input type="email" required name="email" placeholder="Ваша эл. почта *" class="form-control"
                                       id="contact-email">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="contact-company">Компания: *</label>
                                <input type="text" required name="company" placeholder="Наименование компании *"
                                       class="form-control" id="contact-company">
                            </div>

                            <div class="form-group">
                                <input name="date" placeholder="Выбирите дату" type="text" id="datepicker">
                            </div>

                            <div class="form-group">
                                <label class="sr-only" for="contact-question">Что бы вы хотели обсудить с
                                    руководителями?:</label>
                                <textarea style="resize: vertical" name="question" maxlength="1000"
                                          placeholder="Ваше сообщение" class="form-control"
                                          id="contact-question"></textarea>
                            </div>

                            <input type="hidden" name="accept" value="0">

                            <button type="submit" class="btn">Отправить</button>
                        </form>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 righr_sidebar">
                <div class="righr_sidebar_title"></div>
                <ul class="row righr_sidebar_navigation">
                    <li class="righr_sidebar_navigation_item col-xs-12 col-sm-6 col-lg-12">
                        <a href="#" class="righr_sidebar_navigation_item_link">
                            <img src="/App/templates/images/1.jpg" alt="" class="righr_sidebar_navigation_item_img"/>
                            <span class="righr_sidebar_navigation_item_title">Каталог продукции</span>
                        </a>
                    </li>
                    <li class="righr_sidebar_navigation_item col-xs-12 col-sm-6 col-lg-12">
                        <a href="#" class="righr_sidebar_navigation_item_link">
                            <img src="/App/templates/images/2.jpg" alt="" class="righr_sidebar_navigation_item_img"/>
                            <span class="righr_sidebar_navigation_item_title">География доставок</span>
                        </a>
                    </li>
                    <li class="righr_sidebar_navigation_item col-xs-12 col-sm-6 col-lg-12">
                        <a href="#" class="righr_sidebar_navigation_item_link">
                            <img src="/App/templates/images/3.jpg" alt="" class="righr_sidebar_navigation_item_img"/>
                            <span class="righr_sidebar_navigation_item_title">Видеогалерея</span>
                        </a>
                    </li>
                    <li class="righr_sidebar_navigation_item col-xs-12 col-sm-6 col-lg-12">
                        <a href="#" class="righr_sidebar_navigation_item_link">
                            <img src="/App/templates/images/4.jpg" alt="" class="righr_sidebar_navigation_item_img"/>
                            <span class="righr_sidebar_navigation_item_title">Вакансии</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</main>