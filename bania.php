<!DOCTYPE html>
<?php
require_once 'data.php';
$item = $arr_images[$_GET['object']];
?>

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
    <div>
      <a href="/#<?php echo $item['id'] ?>">главная</a> > баня <?php echo $item['card-title'] ?>
    </div>
    <img style="width: 300px; height: 150px;" src="images/cards/<?php echo $item['src'] ?>" alt="баня <?php echo $item['cars-title'] ?>">
  </main>

  <?php include('footer.php'); ?>
  <script src="js/header.js"></script>
</body>

</html>