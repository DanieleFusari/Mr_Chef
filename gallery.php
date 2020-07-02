<?php
$link = "css/gallery.css";
$title = "Mr Chef Contact";
include('inc/header.php');


$db = [ '2_chef', 'pig','garry_stuw', 'whole_pig',  '2chef', 'pig_cut', 'burger_bab', 'server_pig'];

?>

<main>
  <div class="imgs">
    <?php foreach ($db as $value): ?>
        <img class="img" src="/img/gallery/<?=$value?>.JPG" alt="<?=$value?>">
    <?php endforeach; ?>
  </div>
</main>


<?php include('inc/footer.php') ?>
