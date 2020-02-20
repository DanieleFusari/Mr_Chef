<?php
$link = "/css/menu.css";
$title = "Mr Chef Menus";
$js = 'menu';
include('inc/header.php');
include('inc/menu_items.php');
$menu = filter_input(INPUT_GET, 'menu', FILTER_SANITIZE_STRING);
?>
<main>
  <div id="dropdown">
    <select id="dropdown_menus" onchange="change_menu()" name="menus">
        <option value="select">--- Select a menu---</option>
        <option <?php if ($menu == 'cold_finger') echo 'selected' ?> value="cold_finger">Cold Finger Buffet</option>
        <option <?php if ($menu == 'hot_fork') echo 'selected' ?> value="hot_fork">Hot Fork Buffet</option>
        <option <?php if ($menu == 'jacket_pot') echo 'selected' ?> value="jacket_pot">Jacket Pot</option>
        <option <?php if ($menu == 'pig_roast') echo 'selected' ?> value="pig_roast">Pig Roast</option>
        <option <?php if ($menu == 'stu') echo 'selected' ?> value="stu">Stu Options</option>
    </select>
  </div>

  <?php if ($menu == null): ?>
  <div id="menu">

    <div class="menu_wrapper">
      <img src="img/logos/Black_Red.jpg" alt="Mr Chef logo">

      <h1>The Wedding Buffet</h1>

      <p>Minimum of 60 people</p>
      <p>£25.00 + vat per person</p>
      <hr>
      <h5>Crusty bread & butter</h5>
      <hr>
      <h5>Fresh cooked portions of salmon with prawns</h5>
      <hr>
      <h5>Roast topside of beef</h5>
      <h5>Honey roast ham</h5>
      <h5>Roast turkey</h5>
      <h5>Chicken skewers</h5>
      <h5>Assorted topped individual pork pies</h5>
      <h5>Platter of salami & cured ham</h5>
      <h5>Vegetarian skewers (v)</h5>
      <h5>Homemade vegetarian quiche (v)</h5>
      <h5>Vegetable samosa & onion bhajis (v)</h5>
      <hr>
      <h5>Mozzarella, tomato & red onion salad</h5>
      <hr>
      <h5>Mixed leaf salad</h5>
      <h5>Coleslaw</h5>
      <h5>Pasta salad</h5>
      <h5>Greek salad</h5>
      <h5>Waldorf salad</h5>
      <h5>Hot new potatoes</h5>
      <hr>
      <h5>Assortment of pickles & sauces</h5>

      <h6>Selection of sweets to include</h6>

      <h5>Cheese board & assorted biscuits</h5>
      <h5>Trifle</h5>
      <h5>Fruit salad</h5>
      <h5>Apple pie</h5>
      <h5>Gateaux</h5>

    </div> <!-- end menu_wrapper-->
  </div> <!-- end id menu-->
  <?php endif; ?>


</main>


<?php include('inc/footer.php')?>

<!--
<h1>The Wedding Buffet</h1>
<h1><a href="tel:024 76453364"><b>Call:</b> 024 76453364</a></h1>
<h1><a href="mailto:mrchefcatering@hotmail.com"><b>Email:</b>  mrchefcatering@hotmail.com</a></h1>
<hr>
<h2>Buffets for all your special occasions</h2>
<hr>
<h3>Why not let us take the strain out of catering for your guests</h3>
<h4>Weddings, Christenings, Birthday Party, Funerals, Seminars, Office Parties etc.</h4>
<hr>
<h3>Leave it to us the specialists in Finger, Carved & Hot buffets</h3>
<h4>We aim to please our customers and give an excellent service</h4>
<hr>
<h3>Please find enclosed a variety of sample menus.</h3>
<h4>Feel free to alter any menu or design your own to suit your own needs</h4>
<hr>
<h3>All our buffets are served with fine white china plates napkins and cutlery if required.</h3>
<h4>We can also supply you with a laying out tablecloth.</h4>

<h4>No delivery charges.</h4> -->
