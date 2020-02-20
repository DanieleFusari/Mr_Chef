<?php
$link = "/css/events.css";
$title = "Mr Chef Events";
include('inc/header.php');
include('inc/services.php');
$event = filter_input(INPUT_GET, 'event', FILTER_SANITIZE_STRING);

if($services[$event] == null) {
  header("Location:index.php");
}
?>

<main>
  <span class="margin_holder">.</span>

  <div class="section1" style="background-image:url('../img/<?= $services[$event]['service_img']?>')">
    <h1><?= $services[$event]['service'];?></h1>
  </div>

  <div class="section2">
    <h3><?= $services[$event]['service'];?> Catering</h3>
    <?php foreach ($services[$event]['intro'] as $value): ?>
      <p><?= $value ?></p>
    <?php endforeach; ?>
  </div>

  <div class="section3">
    <div class="images">
      <?php foreach ($services[$event]['img'] as $value): ?>
        <img src="img/<?=$value['img']?>" alt="<?=$value['alt']?>" >
      <?php endforeach; ?>
    </div>
  </div>

  <div class="section4">
    <div class="wrapper">
      <h3><?= $services[$event]['menu_option']?></h3>
      <ol>
        <?php foreach ($services[$event]['option'] as $value): ?>
          <li><?=$value['title']?><span class="extra"><?=$value['info'];?></span></li>
        <?php endforeach; ?>
      </ol>

      <?php foreach ($services[$event]['end'] as $value): ?>
        <p><?=$value?></p>
      <?php endforeach; ?>
    </div> <!--wrapper  end-->
  </div> <!--section 4  end-->
  <span class="margin_holder">.</span>
</main>

<?php include('inc/footer.php')?>
