<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/header_footer.css">
    <link rel="stylesheet" href=<?= $link ?>>
<link href="https://fonts.googleapis.com/css?family=Italianno|Trirong&display=swap" rel="stylesheet">
    <!--  font-family: 'Trirong', serif;
          font-family: 'Italianno', cursive;
    --------------------------------------------------------------------------->
    <!-- title image/x-icon  added with JS -->
    <title><?=$title?></title>
  </head>
  <body>
    <header>
      <a tabindex="1" href="index.php"><img class="logo"src="../img/logos/White.png" alt="logo Mr Chef"> </a>
      <nav>
        <ul class="menu_list">
          <li tabindex="2" ><a href="services.php">Services</a></li>

          <li tabindex="3" class="nav_events"><a href="#">Events</a>
            <ul class="menu_menu">
              <li><a href="events.php?event=wedding">Weddings</a></li>
              <li><a href="events.php?event=business">Business</a></li>
              <li><a href="events.php?event=barbecue">Barbecue</a></li>
              <li><a href="events.php?event=special">Special Occasion</a></li>
              <!-- <li><a href="events.php?event=packed_lunches">Packed Lunches</a></li> -->
              <li><a href="events.php?event=funeral">Funerals</a></li>
            </ul>
          </li>
          <li tabindex="4" class="nav_menus "><a href="menus.php">Menus</a>
            <ul class="menu_menu">
              <li><a href="menus.php?menu=barbecue">Barbecue</a></li>
              <li><a href="menus.php?menu=pig_roast">Pig Roast</a></li>
              <li><a href="menus.php?menu=carved_buffet">Carved Buffet</a></li>
              <li><a href="menus.php?menu=combined_portioned_finger_carved">Combined Portioned finger & carved</a></li>
              <li><a href="menus.php?menu=deluxe_combined_portioned_finger_carved">Combined Portioned finger & carved. Deluxe</a></li>
              <li><a href="menus.php?menu=hot_food_menu">Hot Food</a></li>
              <li><a href="menus.php?menu=plated_dinner_service">Plated Dinner Service</a></li>
              <li><a href="menus.php?menu=portioned_finger_buffet">Portioned Finger Buffet.</a></li>
              <li><a href="menus.php?menu=deluxe_portioned_finger_buffet">Portioned Finger Buffet. Deluxe</a></li>
              <li><a href="menus.php?menu=jacket_potato">Jacket Potato</a></li>
              <li><a href="menus.php?menu=wedding_buffet">Wedding Buffet</a></li>
            </ul>
          </li>
          <li tabindex="5" ><a href="contact.php">Contact</a> </li>
        </ul>
      </nav>

    </header>
