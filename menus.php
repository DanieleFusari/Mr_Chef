<?php
$link = "/css/menu.css";
$title = "Mr Chef Menus";
$js = 'menu';
include('inc/header.php');
$menu = filter_input(INPUT_GET, 'menu', FILTER_SANITIZE_STRING);
?>
<main>
  <div id="dropdown">
    <select id="dropdown_menus" onchange="change_menu()" name="menus">
        <option value="select">--- Select a menu---</option>
        <option <?php if ($menu == 'barbecue_ pig_roast') echo 'selected' ?> value="barbecue_ pig_roast ">Barbecue & Pig Roast</option>
        <option <?php if ($menu == 'carved_buffet') echo 'selected' ?> value="carved_buffet">Carved Buffet</option>
        <option <?php if ($menu == 'combined_portioned_finger_carved') echo 'selected' ?> value="combined_portioned_finger_carved">Combined Portioned finger & carved</option>
        <option <?php if ($menu == 'delux_combined_portioned_finger_carved') echo 'selected' ?> value="delux_combined_portioned_finger_carved">Delux Combined Portioned finger & carved</option>
        <option <?php if ($menu == 'hot_food_option_a') echo 'selected' ?> value="hot_food_option_a">Hot Food Option A</option>
        <option <?php if ($menu == 'hot_food_option_b') echo 'selected' ?> value="hot_food_option_b">Hot Food Option B</option>
        <option <?php if ($menu == 'plated_dinner_service') echo 'selected' ?> value="portioned_finger_buffet_baisc_delux">Plated Dinner Service</option>
        <option <?php if ($menu == 'portioned_finger_buffet_baisc_delux') echo 'selected' ?> value="stu">Portioned Finger Buffet. (Baisc & Delux)</option>
        <option <?php if ($menu == 'starters ') echo 'selected' ?> value="starters ">Starters</option>
        <option <?php if ($menu == 'wedding_buffet') echo 'selected' ?> value="wedding_buffet">Wedding Buffet</option>
    </select>
  </div>
  <div id="menu">
    <div class="menu_wrapper">
      <img src="img/logos/Black_Red.jpg" alt="Mr Chef logo">
      <?php switch ($menu) {
        case 'wedding_buffet':
          echo '
          <h1>The Wedding Buffet</h1>
          </br>
          <p>Minimum of 60 people</p>
          <p>£25.00 + vat per person</p>
          <hr>
          <p>Crusty bread & butter</p>
          </br>
          <p>Fresh cooked portions of salmon with prawns</p>
          </br>
          <p>Roast topside of beef</p>
          <p>Honey roast ham</p>
          <p>Roast turkey</p>
          <p>Chicken skewers</p>
          <p>Assorted topped individual pork pies</p>
          <p>Platter of salami & cured ham</p>
          <p>Vegetarian skewers (v)</p>
          <p>Homemade vegetarian quiche (v)</p>
          <p>Vegetable samosa & onion bhajis (v)</p>
          </br>
          <p>Mozzarella, tomato & red onion salad</p>
          </br>
          <p>Mixed leaf salad</p>
          <p>Coleslaw</p>
          <p>Pasta salad</p>
          <p>Greek salad</p>
          <p>Waldorf salad</p>
          <p>Hot new potatoes</p>
          </br>
          <p>Assortment of pickles & sauces</p>
          <hr>
          <p>Selection of sweets to include</p>
          </br>
          <p>Cheese board & assorted biscuits</p>
          <p>Trifle</p>
          <p>Fruit salad</p>
          <p>Apple pie</p>
          <p>Gateaux</p>
          <br>
          <br>
          <a href="#">Download Menu</a>';
          break;

        default:
          echo '
          <h1><a href="tel:024 76453364">Call:</br>024 76453364</a></h1>
          <h1><a href="mailto:mrchefcatering@hotmail.com"><b>Email:</b>  mrchefcatering@hotmail.com</a></h1>
          <p>Buffets for all your special occasions</p>
          </br>
          <p>Why not let us take the strain out of catering for your guests</p>
          <h6>Weddings, Christenings, Birthday Party, Funerals, Seminars, Office Parties etc.</h6>
          </br>
          <p>Leave it to us the specialists in Finger, Carved & Hot buffets</p>
          <h6>We aim to please our customers and give an excellent service</h6>
          </br>
          <p>Please find enclosed a variety of sample menus.</p>
          <h6>Feel free to alter any menu or design your own to suit your own needs</h6>
          </br>
          <p>All our buffets are served with fine white china plates napkins and cutlery if required.</p>
          <h6>We can also supply you with a laying out tablecloth.</h6>
          </br>
          <b>No Delivery Charges.</b>';
          break;
      } ?>
    </div> <!-- end menu_wrapper-->
  </div> <!-- end id menu-->

</main>

<?php include('inc/footer.php')?>
