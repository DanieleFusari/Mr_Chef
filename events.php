<?php
$link = "css/events.css";
$title = "Mr Chef Events";
include('inc/header.php');
include('inc/events.php');
$event = filter_input(INPUT_GET, 'event', FILTER_SANITIZE_STRING);

if($events[$event] == null) {
  header("Location:menus.php");
}
?>
<main>

  <div class="section1" style="background-image:url('../img/<?= $events[$event]['service_img']?>')">
    <h1><?= $events[$event]['service'];?></h1>
  </div>

  <div class="section2">
    <h3><?= $events[$event]['service']?> Catering</h3>
    <?php foreach ($events[$event]['intro'] as $value): ?>
      <p><?= $value ?></p>
    <?php endforeach; ?>
  </div>

  <div class="section3">
    <div class="images">
      <?php foreach ($events[$event]['img'] as $value): ?>
        <img src="img/<?=$value['img']?>" alt="<?=$value['alt']?>" >
      <?php endforeach; ?>
    </div>
  </div>

<?php if ($events[$event]['service'] !== 'Barbecue' && $events[$event]['service'] !== 'Funerals and Wakes' && $events[$event]['service'] !== 'Special Occasion'): ?>
  <div class="section4">
    <div class="wrapper">
      <h3><?= $events[$event]['menu_option']?></h3>
      <ol>
        <?php foreach ($events[$event]['option'] as $value): ?>
          <li><?=$value['title']?><span class="extra"><?=$value['info'];?></span></li>
        <?php endforeach; ?>
      </ol>
    </div> <!--wrapper  end-->
  </div> <!--section 4  end-->
<?php endif; ?>

  <div class="section5">
    <div class="wrapper">
      <h3>Suggested Menus</h3>
      <?php foreach ($events[$event]['suggested_menus'] as $value): ?>
        <li class="suggested_menus"><?=$value['menu']?><a class="link" href="<?=$value['download']?>" download="<?=$value['menu']?>"> <?php if($events[$event]['service'] === 'Business') echo 'call'; else echo 'Download'; ?></a> <a class="link" href="<?=$value['link']?>"><?php if($events[$event]['service'] === 'Business') echo ''; else echo 'View'; ?></a></li>
      <?php endforeach; ?>
    </div> <!--wrapper  end-->
  </div> <!--section 6 end-->

  <div class="section6">
    <div class="wrapper">
      <?php foreach ($events[$event]['end'] as $value): ?>
        <p><?=$value?></p>
      <?php endforeach; ?>
    </div> <!--wrapper  end-->
  </div> <!--section 5  end-->

</main>

<?php include('inc/footer.php')?>
