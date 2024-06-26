<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Бани из бруса</title>
  <link rel="stylesheet" href="css/1-index.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>
  <?php include('header.php'); ?>
  <main>
    <section class="bunner-section">
      <div class="center">
        <div class="bunner-description__wrapper">
          <h1 class="bunner-title">
            СТРОИТЕЛЬСТВО БАНЬ ИЗ&nbsp;БРУСА
          </h1>
          <div class="bunner-text">
            Собственное производство, качественный&nbsp;брус.
          </div>
          <div class="bunner-text">
            Опыт работы более 20 лет!
          </div>
        </div>
      </div>
    </section>
    <section class="about-section">
      <div class="center">
        <div class="about-wrapper">
          <div class="about-desctiption-box">
            <div class="about-title">
              О нашей компании
            </div>
            <div class="about-text">
              Уже много лет наша компания занимается возведением бань из бруса. Мы тщательно подбираем материал для
              строительства, следя за тем, чтобы брус был отличного качества. Наши бани отличаются своей долговечностью
              и надежностью!
            </div>
            <a href="#" class="about-button">Подробнее</a>
          </div>
          <div class="about-images-box">
            <img src="images/about/about-min-1.png" alt="дом" class="about-img">
            <img src="images/about/about-min-2.png" alt="баня" class="about-img">
            <img src="images/about/about-min-3.png" alt="дом" class="about-img">
            <img src="images/about/about-min-4.png" alt="баня" class="about-img">
          </div>
        </div>
      </div>
    </section>
    <section class="cards-section">
      <div class="center">
        <div class="cards-wrapper">
          <div class="cards-title">
            Проекты популярных размеров бань
          </div>
          <div class="cards-text">
            из бруса 100 на 150
          </div>
          <div class="cards-flex-container">
            <?php
            require_once 'data.php';
            $arrLength = count($arr_images);
            for ($i = 0; $i < $arrLength; $i++) { ?>
              <div class="card-box" id="<?php echo $arr_images[$i]['id']  ?>">
                <a href="bania.php?object=<?php echo $i ?>">
                  <img src="images/cards/<?php echo $arr_images[$i]['src'] ?>" alt="баня <?php echo $arr_images[$i]['card-title'] ?>" class="card-img">
                </a>
                <div class="card-title">Баня <?php echo $arr_images[$i]['card-title'] ?></div>
                <div class="card-description"><?php echo $arr_images[$i]['card-descr'] ?></div>
                <a href="bania.php?object=<?php echo $i ?>" class="card-button">Подробнее</a>
              </div>
            <?php  } ?>

          </div>
        </div>
      </div>
    </section>
    <section class="text-section">
      <div class="img-wrapper">
      </div>
      <div class="text-wrapper">
        <div class="center center-text">
          <div class="text-description__box">
            Если вы не нашли подходящий вариант бани у нас на сайте, мы можем построить баню под ключ по вашему
            индивидуальному проекту. Расчёт стоимости произведём бесплатно и быстро, для этого достаточно отправить нам
            план бани. Можно план бани, нарисованный от руки, сфотографировать и отправить через <noindex><a rel="nofollow" href="whatsapp://send?phone=89039000315" target="_blank">WhatsApp</a></noindex>,
            или на почту
            direct.2990610@yandex.ru
             
          </div>
        </div>
      </div>
    </section>
    <section class="servses-section">
      <div class="center">
        <div class="servises-title">
          Перечень услуг
        </div>
        <div class="accordion">
          <div class="accordion-item">
            <div class="accordion-header">
              Строительство бань из бруса под ключ
            </div>
            <div class="accordion-collapse">
              <div class="accordion-body">
                Мы предлагаем комплексные услуги по проектированию, заготовке материалов, строительству и отделке бань
                из бруса.

              </div>
            </div>
          </div>
          <div class="accordion-item">
            <div class="accordion-header">
              Проектирование бань
            </div>
            <div class="accordion-collapse">
              <div class="accordion-body">
                Мы предоставляем клиентам готовые проекты бань и проекты с учётом индивидуальных пожеланий заказчика и
                особенностей участка.

              </div>
            </div>
          </div>
          <div class="accordion-item">
            <div class="accordion-header">
              Закупка и обработка материалов
            </div>
            <div class="accordion-collapse">
              <div class="accordion-body">
                Мы подготовим и обрабатываем для клиентов материалы для сборки бани, а так же закупаем необходимую
                фурнитуру.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <div class="accordion-header">
              Монтаж фундамента
            </div>
            <div class="accordion-collapse">
              <div class="accordion-body">
                Опытные бригады строителей выполняют все необходимые работы по подготовке и устройству фундамента для
                бани из бруса, обеспечивая его прочность и долговечность.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <div class="accordion-header">
              Установка печей и оборудования
            </div>
            <div class="accordion-collapse">
              <div class="accordion-body">
                Наши мастера проводят монтаж печей, дымоходов с противопожарной разделкой.
              </div>
            </div>
          </div>
        </div>
    </section>
    <section class="reviews-section">

      <div class="review-title">
        Отзывы наших клиентов
      </div>

      <div class="center">
        <div class="review-slider__box">
          <div class="review-slider-element element-active">
            <div class="review-description__box">
              <div class="reviewer-box">
                <img src="images/reviews/irina-face.jpg" alt="аватар">
                <div class="review-name name-two">Ирина Моисеева</div>
              </div>

              <div class="review-text">
                Очень долго искала компанию для постройки бани на участке. Остановилась на компании по адресу
                Писемского.
                Руководитель компании - человек с очень грамотным подходом. Объяснил все нюансы стройки.
                Рассказал как делать финишную отделку. Договор составили на 8 августа. И чудо... Бригада освободилась
                раньше. Александр и Иван добросовестно, за 4 дня подвели баню под крышу.
              </div>
              <noindex>
                <a rel="nofollow" href="https://novosibirsk.flamp.ru/firm/bani_i_doma_stroitelno_torgovaya_kompaniya-141265771996642/otzyv-8483383" class="reiew-link">Читать полностью</a>
              </noindex>
            </div>
            <div class="review-img__box review-img-one"></div>
          </div>

          <div class="review-slider-element element-disactive">
            <div class="review-description__box">
              <div class="reviewer-box">
                <img src="images/reviews/ksenia-face.jpg" alt="аватар">
                <div class="review-name">Ксения</div>
              </div>

              <div class="review-text">
                Все, что мы можем сказать, большое спасибо! Баню поставили нам в 2020 году, в мае месяце. Прошел год и
                мы
                готовы оставить полноценный отзыв. Баня находится в Бердске, проблем с местоположением не возникло.
                Приехали
                заранее, чтобы оставить предоплату и обсудить план бани. Все прошло без нареканий 
              </div>
              <noindex>
                <a rel="nofollow" href="https://novosibirsk.flamp.ru/firm/bani_i_doma_stroitelno_torgovaya_kompaniya-141265771996642/otzyv-7001449" class="reiew-link">Читать полностью</a>
              </noindex>
            </div>
            <div class="review-img__box review-img-two"></div>
          </div>

          <div class="review-slider-element element-disactive">
            <div class="review-description__box">
              <div class="reviewer-box">
                <img src="images/reviews/avatar.png" alt="аватар">
                <div class="review-name">Анна Владимировна</div>
              </div>

              <div class="review-text">
                Доброго времени суток всем! Меня зовут Анна Владимировна.
                В прошлом 2020 году решила построить на загородном садовом участке небольшую баню из цельного бруса.
                Поиск
                надёжной строительной компании занял немало времени. Остановила внимание на данной фирме. При оформлении
                заказа на изготовление бани и личной встрече с руководителем фирмы
              </div>
              <noindex>
                <a rel="nofollow" href="https://novosibirsk.flamp.ru/firm/bani_i_doma_stroitelno_torgovaya_kompaniya-141265771996642/otzyv-6935357" class="reiew-link">Читать полностью</a>
              </noindex>
            </div>
            <div class="review-img__box review-img-three"></div>
          </div>

          <div class="review-slider-element element-disactive">
            <div class="review-description__box">
              <div class="reviewer-box">
                <img src="images/reviews/juriy-face.jpg" alt="аватар">
                <div class="review-name">Юрий</div>
              </div>

              <div class="review-text">
                Меня можно считать уже оптовым заказчиком. Мой первый опыт общения с этой компанией произошел в 2014
                году, когда мы захотели построить баню. Было много перебрано вариантов строительных компаний, в итоге
                остановились на этой, тк. нас устроило соотношение сроков строительства и цена. Мне понравился сам
                процесс: 6 мая приехали двое
              </div>
              <noindex>
                <a rel="nofollow" href="https://novosibirsk.flamp.ru/firm/bani_i_doma_stroitelno_torgovaya_kompaniya-141265771996642/otzyv-5216744" class="reiew-link">Читать полностью</a>
              </noindex>
            </div>
            <div class="review-img__box review-img-four"></div>
          </div>
        </div>
      </div>
      <div class="review-button_box">
        <div class="button-left"></div>
        <div class="button-right"></div>
      </div>
    </section>
    <section class="contacts-section">
      <div class="contact-wrapper">
        <div class="contact-block">
          <div class="contact-title">Контактная информация</div>
          <div class="contact-adress">
            г.Новосибирск,  ул.Писемского, д.&nbsp;24/2
          </div>
          <div class="contact-phone">
            <noindex>
              <a href="tel:+79139170610" rel="nofollow">
                тел.: 8 (383) 299-06-10
              </a>
            </noindex>
          </div>
          <div class="contact-mail">
            <noindex>
              <a href="mailto:direct.2990610@yandex.ru">
                e-mail: 2990610@ngs.ru
              </a>
            </noindex>
          </div>
          <div class="contact-text">
            Просьба к заказчикам, желающим приехать в&nbsp;офис (на производство), сделать предварительный звонок. Так
            же
            принимаем в&nbsp;субботу и&nbsp;воскресенье.
          </div>
        </div>
        <div class="map-block">
          <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A60bdb8ca391eb90ad0d89cf838f7f53c57fbe62462fe76709c0bd1fbe2c6acfb&amp;source=constructor" width="100%" frameborder="0" title="yandex-map"></iframe>
        </div>
      </div>
    </section>
  </main>
  <?php include('footer.php'); ?>
  <script src="js/header.js"></script>
  <script src="js/servises.js"></script>
  <script src="js/stringcount.js"></script>
  <script src="js/sliderreview.js"></script>
</body>

</html>