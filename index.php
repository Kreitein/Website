<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Прокат автомобилей</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="css/animate.css" rel="stylesheet">

  <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/font-awesome.min.css">

  <link href="css/datepicker.css" rel="stylesheet">

  <link href="css/styles.css" rel="stylesheet">

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/apple-touch-icon-144-precomposed.png">

  </head>
  <body id="top" data-spy="scroll" data-target=".navbar" data-offset="260">

  
    <header data-spy="affix" data-offset-top="39" data-offset-bottom="0" class="large">

      <div class="row container box">
        <div class="col-md-5">
          <div class="brand">
            <h1><a class="scroll-to" href="#top"><img class="img-responsive" src="img/logo.gif"alt="Car|Rental"></a></h1>
          </div>
        </div>

        <div class="col-md-7">

          <div class="clearfix"></div>
          <nav class="navbar navbar-default" role="navigation">
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active"><a href="#" class="scroll-to">Главная</a></li>
                  <li><a href="#services" class="scroll-to">Услуги</a></li>
                  <li><a href="#vehicles" class="scroll-to">Модели транспортных средств</a></li>
                  <li><a href="#contact" class="scroll-to">Контакты</a></li>
                </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>

    <section id="teaser">
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-xs-12 pull-right">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              
              <div class="carousel-inner">
                <div class="item active">
                  <h1 class="title">Роскошный автомобиль от 2000 рублей в день.
                    <div class="car-img">
                      <img src="img/Car3.jpg" class="img-responsive" alt="car1">
                    </div>
                  </div>
                  <div class="item">
                    <h1 class="title">Получите скидку 15% на аренду
                      <span class="subtitle">Спланируйте свою поездку прямо сейчас</span></h1>
                      <div class="car-img">
                        <img src="img/15.png" class="img-responsive" alt="15">
                      </div>
                    </div>
                  </div>
				  
				    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span> </a>
					<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span> </a>

                </div>
              </div>
              <div class="col-md-5 col-xs-12 pull-left">
                <div class="reservation-form-shadow">

                  <form action="#" method="post" name="car-select-form" id="car-select-form">

                    <div class="alert alert-danger hidden" id="car-select-form-msg">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      <strong>Примечание:</strong> Все поля обязательны для заполнения!
                    </div>
                    <div class="styled-select-car">
                      <select name="car-select" id="car-select">
                        <option value="">Выберите тип вашего автомобиля</option>
                        <option value="img/VW.jpg">Volkswagen Golf VII</option>
                        <option value="img/Audi.jpg">Audi A1</option>
                        <option value="img/Toyota.jpg">Toyota Camry</option>
                        <option value="img/BMW.jpg">BMW x5</option>
                        <option value="img/Mercedes.jpg">Mercedes-Benz GLK</option>
                        <option value="img/Volkswagen.jpg">Volkswagen Teramont</option>
                      </select>
                    </div>

                    <div class="location">
                      <div class="input-group pick-up">
                        <span class="input-group-addon"><span value="img/.jpg" class="glyphicon glyphicon-map-marker"></span>Самовызов</span>
                        <input type="text" name="pick-up-location" id="pick-up-location" class="form-control autocomplete-location" placeholder="Вьезд в город или аэропорт">
                      </div>
                    </div>
					
                    <div class="datetime pick-up">
                      <div class="date pull-left">
                        <div class="input-group">
                          <span class="input-group-addon pixelfix"><span class="glyphicon glyphicon-calendar"></span> Самовывоз</span>
                          <input type="text" name="pick-up-date" id="pick-up-date" class="form-control datepicker" placeholder="мм/дд/гггг">
                        </div>
                      </div>
                      <div class="time pull-right">
                        <div class="styled-select-time">
                          <select name="pick-up-time" id="pick-up-time">
                            <option value="08:00">08:00</option>
                            <option value="08:30">08:30</option>
                            <option value="09:00">09:00</option>
                            <option value="09:30">09:30</option>
                            <option value="10:00">10:00</option>
                            <option value="10:30">10:30</option>
                            <option value="11:00">11:00</option>
                            <option value="11:30">11:30</option>
                            <option value="12:00">12:00</option>
                            <option value="12:30">12:30</option>
                            <option value="13:00">13:00</option>
                            <option value="13:30">13:30</option>
                            <option value="14:00">14:00</option>
                            <option value="14:30">14:30</option>
                            <option value="15:00">15:00</option>
                            <option value="15:30">15:30</option>
                            <option value="16:00">16:00</option>
                            <option value="16:30">16:30</option>
                            <option value="17:00">17:00</option>
                            <option value="17:30">17:30</option>
                            <option value="18:00">18:00</option>
                            <option value="18:30">18:30</option>
                            <option value="19:00">19:00</option>
                            <option value="19:30">19:30</option>
                            <option value="20:00">20:00</option>
                            <option value="20:30">20:30</option>
                            <option value="21:00">21:00</option>
                          </select>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>

                    <div class="datetime drop-off">
                      <div class="date pull-left">
                        <div class="input-group">
                          <span class="input-group-addon pixelfix"><span class="glyphicon glyphicon-calendar"></span> Высадка</span>
                          <input type="text" name="drop-off-date" id="drop-off-date" class="form-control datepicker" placeholder="мм/дд/гггг">
                        </div>
                      </div>
                      <div class="time pull-right">
                        <div class="styled-select-time">
                          <select name="drop-off-time" id="drop-off-time">
                           <option value="08:00">08:00</option>
                            <option value="08:30">08:30</option>
                            <option value="09:00">09:00</option>
                            <option value="09:30">09:30</option>
                            <option value="10:00">10:00</option>
                            <option value="10:30">10:30</option>
                            <option value="11:00">11:00</option>
                            <option value="11:30">11:30</option>
                            <option value="12:00">12:00</option>
                            <option value="12:30">12:30</option>
                            <option value="13:00">13:00</option>
                            <option value="13:30">13:30</option>
                            <option value="14:00">14:00</option>
                            <option value="14:30">14:30</option>
                            <option value="15:00">15:00</option>
                            <option value="15:30">15:30</option>
                            <option value="16:00">16:00</option>
                            <option value="16:30">16:30</option>
                            <option value="17:00">17:00</option>
                            <option value="17:30">17:30</option>
                            <option value="18:00">18:00</option>
                            <option value="18:30">18:30</option>
                            <option value="19:00">19:00</option>
                            <option value="19:30">19:30</option>
                            <option value="20:00">20:00</option>
                            <option value="20:30">20:30</option>
                            <option value="21:00">21:00</option>
                          </select>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>

                    <input type="submit" class="submit" name="submit" value="Продолжить" id="checkoutModalLabel">
                  </form>

                </div>
              </div>

            </div>
          </div>
        </section>
        <div class="arrow-down"></div>

        <section id="services" class="container">
          <div class="row">
            <div class="col-md-12 title">
              <h2>Обслуживание клиентов</h2>
              <span class="underline">&nbsp;</span>
            </div>

            <div class="col-md-6">
              <div class="service-box wow fadeInLeft" data-wow-offset="100">
                <div class="service-icon">+</div>
                <h3 class="service-title">Специальные цены на бронирование</h3>
                <div class="clearfix"></div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="service-box wow fadeInRight" data-wow-offset="100">
                <div class="service-icon">+</div>
                <h3 class="service-title">Бронирование мобильного телефона</h3>
                <div class="clearfix"></div>
              
              </div>
            </div>

            <div class="col-md-6">
              <div class="service-box wow fadeInLeft" data-wow-offset="100">
                <div class="service-icon">+</div>
                <h3 class="service-title">Прокат автомобилей с неограниченным количеством миль</h3>
                <div class="clearfix"></div>
              
              </div>
            </div>

            <div class="col-md-6">
              <div class="service-box wow fadeInRight" data-wow-offset="100">
                <div class="service-icon">+</div>
                <h3 class="service-title"> ФИО; Паспортные данные; Адрес; Номер телефона</h3>
                <div class="clearfix"></div>
          
              </div>
            </div>

          </div>
        </section>

          <section id="vehicles" class="container">
            <div class="row">
              <div class="col-md-12">
                <h2 class="title wow fadeInDown" data-wow-offset="200">Модели транспортных средств</h2>
              </div>

              <div class="col-md-3 wow fadeInUp" data-wow-offset="100">
                <div id="vehicle-nav-container">
                  <ul class="vehicle-nav">
                    <li class="active"><a href="#VW">Volkswagen Golf VII</a><span class="active">&nbsp;</span></li>
                    <li><a href="#Audi">Audi A1</a><span class="active">&nbsp;</span></li>
                    <li><a href="#Toyota">Toyota Camry</a><span class="active">&nbsp;</span></li>
                    <li><a href="#BMW">BMW x5</a><span class="active">&nbsp;</span></li>
                    <li><a href="#Mercedes">Mercedes-Benz GLK</a><span class="active">&nbsp;</span></li>
                    <li><a href="#Volkswagen">Volkswagen Teramont</a><span class="active">&nbsp;</span></li>
                  </ul>
                </div>
              </div>
			  
              <div class="vehicle-data" id="VW">
                <div class="col-md-6 wow fadeIn" data-wow-offset="100">
                  <div class="vehicle-img">
                    <img class="img-responsive" src="img/VW.jpg" alt="Vehicle">
                  </div>
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-offset="200">
                  <div class="vehicle-price">2700р <span class="info">Аренда в сутки</span></div>
                  <table class="table vehicle-features">
                    <tr>
                      <td>Модель</td>
                      <td>Хэтчбек 5дв</td>
                    </tr>
                    <tr>
                      <td>Двери</td>
                      <td>4</td>
                    </tr>
                    <tr>
                      <td>Места</td>
                      <td>5</td>
                    </tr>
                    <tr>
                      <td>Багаж</td>
                      <td>2 Чемодана /2 Сумки</td>
                    </tr>
                    <tr>
                      <td>Коробка передач</td>
                      <td>Автоматический</td>
                    </tr>
                    <tr>
                      <td>Кондиционер</td>
                      <td>Да</td>
                    </tr>
                  </table>
                  <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon"></span>Зарезервируй</a>
                </div>
              </div>
			  
              <div class="vehicle-data" id="Audi">
                <div class="col-md-6" data-wow-offset="200">
                  <div class="vehicle-img">
                    <img class="img-responsive" src="img/Audi.jpg" alt="Vehicle">
                  </div>
                </div>
                <div class="col-md-3" data-wow-offset="200">
                  <div class="vehicle-price">5000р <span class="info">Аренда в сутки</span></div>
                  <table class="table vehicle-features">
					<tr>
                      <td>Модель</td>
                      <td>Хэтчбек 3дв</td>
                    </tr>
                    <tr>
                      <td>Двери</td>
                      <td>2</td>
                    </tr>
                    <tr>
                      <td>Места</td>
                      <td>5</td>
                    </tr>
                    <tr>
                      <td>Багаж</td>
                      <td>2 Чемодана /2 Сумки</td>
                    </tr>
                    <tr>
                      <td>Коробка передач</td>
                      <td>Автоматический</td>
                    </tr>
                    <tr>
                      <td>Кондиционер</td>
                      <td>Да</td>
                    </tr>
                  </table>
                  <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon"></span>Зарезервируй</a>
                </div>
              </div>
			  
              <div class="vehicle-data" id="Toyota">
                <div class="col-md-6" data-wow-offset="200">
                  <div class="vehicle-img">
                    <img class="img-responsive" src="img/Toyota.jpg" alt="Vehicle">
                  </div>
                </div>
                <div class="col-md-3" data-wow-offset="200">
                  <div class="vehicle-price">7400р <span class="info">Аренда в сутки</span></div>
                  <table class="table vehicle-features">
                    <tr>
                      <td>Модель</td>
                      <td>Cедан</td>
                    </tr>
                    <tr>
                      <td>Двери</td>
                      <td>4</td>
                    </tr>
                    <tr>
                      <td>Места</td>
                      <td>5</td>
                    </tr>
                    <tr>
                      <td>Багаж</td>
                      <td>2 Чемодана /2 Сумки</td>
                    </tr>
                    <tr>
                      <td>Коробка передач</td>
                      <td>Автоматический</td>
                    </tr>
                    <tr>
                      <td>Кондиционер</td>
                      <td>Да</td>
					</tr>
                  </table>
                  <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon"></span>Зарезервируй</a>
                </div>
              </div>

              <div class="vehicle-data" id="BMW">
                <div class="col-md-6" data-wow-offset="200">
                  <div class="vehicle-img">
                    <img class="img-responsive" src="img/BMW.jpg" alt="Vehicle">
                  </div>
                </div>
                <div class="col-md-3" data-wow-offset="200">
                  <div class="vehicle-price">8500р <span class="info">Аренда в сутки</span></div>
                  <table class="table vehicle-features">
                    <tr>
                      <td>Модель</td>
                      <td>Джип 5дв</td>
                    </tr>
                    <tr>
                      <td>Двери</td>
                      <td>4</td>
                    </tr>
                    <tr>
                      <td>Места</td>
                      <td>5</td>
                    </tr>
                    <tr>
                      <td>Багаж</td>
                      <td>2 Чемодана /2 Сумки</td>
                    </tr>
                    <tr>
                      <td>Коробка передач</td>
                      <td>Автоматический</td>
                    </tr>
                    <tr>
                      <td>Кондиционер</td>
                      <td>Да</td>
                    </tr>
                  </table>
                  <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon"></span>Зарезервируй</a>
                </div>
              </div>

              <div class="vehicle-data" id="Mercedes">
                <div class="col-md-6" data-wow-offset="200">
                  <div class="vehicle-img">
                    <img class="img-responsive" src="img/Mercedes.jpg" alt="Vehicle">
                  </div>
                </div>
                <div class="col-md-3" data-wow-offset="200">
                  <div class="vehicle-price">9500р <span class="info">Аренда в сутки</span></div>
                  <table class="table vehicle-features">
                    <tr>
                      <td>Модель</td>
                      <td>Джип 5дв</td>
                    </tr>
                    <tr>
                      <td>Двери</td>
                      <td>4</td>
                    </tr>
                    <tr>
                      <td>Места</td>
                      <td>5</td>
                    </tr>
                    <tr>
                      <td>Багаж</td>
                      <td>2 Чемодана /2 Сумки</td>
                    </tr>
                    <tr>
                      <td>Коробка передач</td>
                      <td>Автоматический</td>
                    </tr>
                    <tr>
                      <td>Кондиционер</td>
                      <td>Да</td>
                  </table>
                  <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon"></span>Зарезервируй</a>
                </div>
              </div>

              <div class="vehicle-data" id="Volkswagen">
                <div class="col-md-6" data-wow-offset="200">
                  <div class="vehicle-img">
                    <img class="img-responsive" src="img/Volkswagen.jpg" alt="Vehicle">
                  </div>
                </div>
                <div class="col-md-3" data-wow-offset="200">
                  <div class="vehicle-price">11000р <span class="info">Аренда в сутки</span></div>
                  <table class="table vehicle-features">
                    <tr>
                      <td>Модель</td>
                      <td>Джип 5дв</td>
                    </tr>
                    <tr>
                      <td>Двери</td>
                      <td>4</td>
                    </tr>
                    <tr>
                      <td>Места</td>
                      <td>7</td>
                    </tr>
                    <tr>
                      <td>Багаж</td>
                      <td>2 Чемодана /2 Сумки</td>
                    </tr>
                    <tr>
                      <td>Коробка передач</td>
                      <td>Автоматический</td>
                    </tr>
                    <tr>
                      <td>Кондиционер</td>
                      <td>Да</td>
                  </table>
                  <a href="#teaser" class="reserve-button scroll-to"><span class="glyphicon"></span>Зарезервируй</a>
                </div>
              </div>

            </div>
          </section>
		  


        <section id="contact" class="container wow bounceInUp" data-wow-offset="50">
          <div class="row">
            <div class="col-md-12">
              <h2>Свяжитесь с нами</h2>
            </div>
            <div class="col-md-8 col-xs-12 pull-left">
              <p class="contact-info">У вас есть какие-либо вопросы или вам нужна дополнительная информация? <br>
                <form action="contact.php" method="post"  name="contact-form">
                  <div class="alert hidden" id="contact-form-msg"></div>
                  <div class="form-group">
                    <input type="text" class="form-control first-name text-field" name="first-name" placeholder="Имя:">
                    <input type="text" class="form-control last-name text-field" name="last-name" placeholder="Фамилия:">
                    <div class="clearfix"></div>
                  </div>
                  <div class="form-group">
                    <input type="tel" class="form-control telephone text-field" name="telephone" placeholder="Номер телефона:">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control email text-field" name="email" placeholder="Email:">
                  </div>
                  <div class="form-group">
                    <textarea class="form-control message" name="message" placeholder="Сообщение:"></textarea>
                  </div>
                    <input type="submit" class="btn submit-message" name="B1" value="Отправить Сообщение">
                </form>
              </div>
            </div>
          </section>
          <a href="#" class="scrollup">ScrollUp</a>
          <footer>
            <div class="container">
              <div class="row">
                <div class="col-md-12 text-center">
                  <ul class="footer-nav">
                    <li><a class="scroll-to" href="#top">Главная</a></li>
                    <li><a class="scroll-to" href="#services">Услуги</a></li>
                    <li><a class="scroll-to" href="#vehicles">Модели транспортных средств</a></li>
                    <li><a class="scroll-to" href="#contact">Контакты</a></li>
                  </ul>
                  <div class="clearfix"></div>
                  <p class="copyright">©2021 Car Rental </p>
                </div>
              </div>
            </div>
          </footer>

          <div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="checkoutModalLabel" aria-hidden="true" data-backdrop="static">
            <div class="modal-dialog">
              <div class="modal-content">
                <form action="PR.php" method="post" name="B1">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Полное бронирование</h4>
                  </div>

                  <div class="modal-body">
				  
                    <div class="checkout-info-box">
                      <h3><i class="fa fa-info-circle"></i> После заполнения этого запроса на бронирование вы получите:</h3>
                    </div>

                    <div class="checkout-vehicle-info">
                      <div class="location-date-info">
                        <h3>Местоположение и Дата</h3>
                        <div class="info-box">
                          <span class="glyphicon glyphicon-calendar"></span>
                          <h4 class="info-box-title">Время встречи</h4>
                          <p class="info-box-description"><span id="pick-up-date-ph"></span> at <span id="pick-up-time-ph"></span></p>
                          <input type="hidden" name="pick-up" id="pick-up" value="">
                        </div>
                        <div class="info-box">
                          <span class="glyphicon glyphicon-calendar"></span>
                          <h4 class="info-box-title">Время высадки</h4>
                          <p class="info-box-description"><span id="drop-off-date-ph"></span> at <span id="drop-off-time-ph"></span></p>
                          <input type="hidden" name="drop-off" id="drop-off" value="">
                        </div>
                        <div class="info-box">
                          <span class="glyphicon glyphicon-map-marker"></span>
                          <h4 class="info-box-title">Место встречи</h4>
                          <p class="info-box-description" id="pickup-location-ph"></p>
                          <input type="hidden" name="pickup-location" id="pickup-location" value="">
                        </div>
                      </div>
                      </div>

                      <div class="vehicle-info">
                        <h3>Автомобиль: <span id="selected-car-ph"></span></h3>
                        <input type="hidden" name="selected-car" id="selected-car" value="">
                        <div class="clearfix"></div>
                        <div class="vehicle-image">
                          <img class="img-responsive" id="selected-vehicle-image" src="img/vehicle1.jpg" alt="Vehicle">
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <hr>
					
                    <div class="checkout-personal-info">
                      <div class="alert hidden" id="checkout-form-msg">
                      </div>
                      <h3>Личная информация</h3>
                      <div class="form-group left">
                        <label for="first-name">Имя</label>
                        <input type="text" class="form-control" name="first-name" id="first-name" placeholder="Введите свое имя">
                      </div>
                      <div class="form-group right">
                        <label for="last-name">Фамилия</label>
                        <input type="text" class="form-control" name="last-name" id="last-name" placeholder="Введите свою фамилию">
                      </div>
                      <div class="form-group left">
                        <label for="phone-number">Номер телефона:</label>
                        <input type="text" class="form-control" name="phone-number" id="phone-number" placeholder="Введите свой номер телефона">
                      </div>
                      <div class="form-group right age">
                        <label for="age">Возраст:</label>
                        <div class="styled-select-age">
                          <select name="age" id="age">
                          <option value="18">18</option>
                           <option value="19">19</option>
                           <option value="20">20</option>
                           <option value="21">21</option>
                           <option value="22">22</option>
                           <option value="23">23</option>
                           <option value="24">24</option>
                           <option value="25">25</option>
                           <option value="26">26</option>
                           <option value="27">27</option>
                           <option value="28">28</option>
                           <option value="29">29</option>
                           <option value="30">30</option>
                           <option value="31">31</option>
                           <option value="32">32</option>
                           <option value="33">33</option>
                           <option value="34">34</option>
                           <option value="35">35</option>
                           <option value="36">36</option>
                           <option value="37">37</option>
                           <option value="38">38</option>
                           <option value="39">39</option>
                           <option value="40">40</option>
                           <option value="41">41</option>
                           <option value="42">42</option>
                           <option value="43">43</option>
                           <option value="44">44</option>
                           <option value="45">45</option>
                           <option value="46">46</option>
                           <option value="47">47</option>
                           <option value="48">48</option>
                           <option value="49">49</option>
                           <option value="50">50</option>
                         </select>
                       </div>
                     </div>
                     <div class="form-group left">
                      <label for="email-address">Адрес электронной почты:</label>
                      <input type="email" class="form-control" name="email-address" id="email-address" placeholder="Введите свой адрес электронной почты:">
                    </div>
                    <div class="clearfix"></div>
                  </div>
				  <div class="checkout-address-info">
                    <div class="form-group address">
                      <label for="address">Адрес</label>
                      <input type="text" class="form-control" name="address" id="address" placeholder="Войдите на свою улицу">
                    </div>

                    <div class="form-group city">
                      <label for="city">Город</label>
                      <input type="text" class="form-control" name="city" id="city" placeholder="Войдите в свой город">
                    </div>
                    <div class="form-group zip-code">
                      <label for="zip-code">Почтовый индекс</label>
                      <input type="text" class="form-control" name="zip-code" id="zip-code" placeholder="Введите свой почтовый индекс">
                    </div>
                    <div class="clearfix"></div>
                  </div>
				  
                </div>
                <div class="modal-footer">
                  <span class="btn-border btn-gray">
                    <button type="button" class="btn btn-default btn-gray" data-dismiss="modal">Отменить</button>
                  </span>
                  <span class="btn-border btn-yellow">
                    <button type="submit" class="btn btn-primary btn-yellow" name="B1">Зарезервируй</button>
                  </span>
                </div>
              </form>
            </div>
          </div>
        </div>
		
		
		
		
		
		
		
		



        <script src="js/jquery-1.11.0.min.js"></script>
        <script src="js/style-switcher.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.autocomplete.min.js"></script>
        <script src="js/jquery.placeholder.js"></script>
        <script src="js/locations-autocomplete.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
        <script src="js/gmap3.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/custom.js"></script>

      </body>
      </html>