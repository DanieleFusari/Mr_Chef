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
        <option <?php if ($menu == 'barbecue') echo 'selected' ?> value="barbecue">Barbecue</option>
        <option <?php if ($menu == 'pig_roast') echo 'selected' ?> value="pig_roast">Pig Roast</option>
        <option <?php if ($menu == 'carved_buffet') echo 'selected' ?> value="carved_buffet">Carved Buffet</option>
        <option <?php if ($menu == 'combined_portioned_finger_carved') echo 'selected' ?> value="combined_portioned_finger_carved">Combined Portioned finger & carved</option>
        <option <?php if ($menu == 'deluxe_combined_portioned_finger_carved') echo 'selected' ?> value="deluxe_combined_portioned_finger_carved">Deluxe Combined Portioned finger & carved</option>
        <option <?php if ($menu == 'hot_food_menu') echo 'selected' ?> value="hot_food_menu">Hot Food</option>
        <option <?php if ($menu == 'plated_dinner_service') echo 'selected' ?> value="plated_dinner_service">Plated Dinner Service</option>
        <option <?php if ($menu == 'portioned_finger_buffet') echo 'selected' ?> value="portioned_finger_buffet">Portioned Finger Buffet.</option>
        <option <?php if ($menu == 'deluxe_portioned_finger_buffet') echo 'selected' ?> value="deluxe_portioned_finger_buffet">Portioned Finger Buffet. Deluxe</option>
        <option <?php if ($menu == 'jacket_potato') echo 'selected' ?> value="jacket_potato">Jacket Potato</option>
        <option <?php if ($menu == 'wedding_buffet') echo 'selected' ?> value="wedding_buffet">Wedding Buffet</option>
    </select>
  </div>
  <div id="menu">
      <?php switch ($menu) {
          case 'wedding_buffet':
            echo "<img class='menu_jpg' src='inc/downloads/wedding.jpg'>";
            echo "<a id='download' href='inc/downloads/$menu.pdf' download=$menu>Download</a>";
            break;
          case 'barbecue':
            echo "<img class='menu_jpg' src='inc/downloads/barbecue.jpg'>";
            echo "<a id='download' href='inc/downloads/$menu.pdf' download=$menu>Download</a>";
            break;
          case 'pig_roast':
            echo "<img class='menu_jpg' src='inc/downloads/pig_roast.jpg'>";
            echo "<a id='download' href='inc/downloads/$menu.pdf' download=$menu>Download</a>";
            break;
          case 'carved_buffet':
              echo "<img class='menu_jpg' src='inc/downloads/carved_buffet.jpg'>";
              echo "<a id='download' href='inc/downloads/$menu.pdf' download=$menu>Download</a>";
              break;
          case 'combined_portioned_finger_carved':
              echo "<img class='menu_jpg' src='inc/downloads/combined_portioned_finger_&_carved.jpg'>";
              echo "<a id='download' href='inc/downloads/$menu.pdf' download=$menu>Download</a>";
              break;
          case 'deluxe_combined_portioned_finger_carved':
              echo "<img class='menu_jpg' src='inc/downloads/deluxe_combined_portioned_finger_carved.jpg'>";
              echo "<a id='download' href='inc/downloads/$menu.pdf' download=$menu>Download</a>";
              break;
          case 'hot_food_menu':
              echo "<img class='menu_jpg' src='inc/downloads/hot_food_menu.jpg'>";
              echo "<a id='download' href='inc/downloads/$menu.pdf' download=$menu>Download</a>";
              break;
          case 'plated_dinner_service':
          echo "<img class='menu_jpg' src='inc/downloads/plated_dinner_service.jpg'>";
          echo "<img class='menu_jpg' src='inc/downloads/plated_dinner_service_main.jpg'>";
          echo "<img class='menu_jpg' src='inc/downloads/plated_dinner_service_main_desserts.jpg'>";
          echo "<a id='download' href='inc/downloads/$menu.pdf' download=$menu>Download Starter</a>";
          echo "<a id='download' href='inc/downloads/$menu.pdf' download=$menu>Download Main</a>";
          echo "<a id='download' href='inc/downloads/$menu.pdf' download=$menu>Download Desserts</a>";
              break;
          case 'hot_food_menu':
              echo "<img class='menu_jpg' src='inc/downloads/hot_food_menu.jpg'>";
              break;
          case 'portioned_finger_buffet':
              echo "<img class='menu_jpg' src='inc/downloads/portioned_finger_buffet.jpg'>";
              echo "<a id='download' href='inc/downloads/$menu.pdf' download=$menu>Download</a>";
              break;
          case 'deluxe_portioned_finger_buffet':
              echo "<img class='menu_jpg' src='inc/downloads/deluxe_portioned_finger_buffet.jpg'>";
              echo "<a id='download' href='inc/downloads/$menu.pdf' download=$menu>Download</a>";
              break;
          case 'jacket_potato':
              echo "<img class='menu_jpg' src='inc/downloads/jacket_potato.jpg'>";
              echo "<a id='download' href='inc/downloads/$menu.pdf' download=$menu>Download</a>";
              break;
          default:
            echo "<img class='menu_jpg' src='inc/downloads/default.jpg'>";
            break;
      } ?>
  </div> <!-- end id menu-->

</main>

<?php include('inc/footer.php')?>
