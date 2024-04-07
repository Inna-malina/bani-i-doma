<!DOCTYPE html>
<?php
require_once 'data.php';
$item = $arr_images[$_GET['object']];
?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="canonical" href="index.php" />
  <title>Баня <?php echo $item['card-title'] ?> из бруса в Новосибирске</title>
  <meta name="description" content="Заказать баню <?php echo $item['card-title'] ?> под ключ">
  <link rel="stylesheet" href="css/1-index.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
</head>

<body>
  <?php include('header.php'); ?>
  <main>
    <section class="bania-foto__section">
      <div class="center">
        <div class="breadcrumps">
          <noindex><a rel="nofollow" href="/#<?php echo $item['id'] ?>">Главная</a></noindex> > <span>Баня <?php echo $item['card-title'] ?></span>
        </div>
        <div class="bania-wrapper">
          <h1 class="bania-wrapper__title">
            Баня <?php echo $item['card-title'] ?>
          </h1>
          <div class="bania-flexbox">
            <div class="bania-img__box">
              <img class="bania-general" src="images/cards/<?php echo $item['src'] ?>" alt="баня <?php echo $item['card-title'] ?>">
              <div class="bania-scheme__box">
                <img class="bania-scheme" src="images/src-plan-3d/<?php echo $item['src-plan-3d'] ?>" alt="баня <?php echo $item['card-title'] ?>">
                <img class="bania-scheme" src="images/src-plan-2d/<?php echo $item['src-plan-2d'] ?>" alt="баня <?php echo $item['card-title'] ?>">
              </div>
            </div>
            <div class="bania-description__box">
              <div class="bania-description">
                <p>
                  <?php echo $item['bania-descr-one'] ?>
                </p>
                <p>
                  <?php echo $item['bania-descr-two'] ?>
                </p>
                <p>
                  <?php echo $item['bania-descr-three'] ?>
                </p>
              </div>

            </div>
          </div>
          <div class="bania-description__general">
            <h2 class="bania-description-title">
              Комплектация бань на&nbsp;столбчатом фундаменте под&nbsp;профнастилом, с&nbsp;установкой печи.
            </h2>
            <ul class="bania-description__list">
              <li class="bania-description__item">Сруб бани (расшифровка выше)</li>
              <li class="bania-description__item">Печь банная "Костёр-14" с баком и трубами</li>
              <li class="bania-description__item">Кирпич облицовочный, щебень, песок, цемент.</li>
              <li class="bania-description__item">Кровельный материал металлочерепица или профнастил (цвет по желанию)</li>
              <li class="bania-description__item">Крепёж, льняной войлок, стекло, фурнитура для окон, шарниры</li>
              <li class="bania-description__item">Кран, трубки, переходники для печи</li>
              <li class="bania-description__item">Противопожарная разделка потолка и кровли</li>
              <li class="bania-description__item">Антисептик для обработки первого ряда и лаг, гидроизоляция на фунамент</li>
            </ul>
          </div>
        </div>

      </div>
    </section>

  </main>

  <?php include('footer.php'); ?>
  <script src="js/header.js"></script>
</body>

</html>