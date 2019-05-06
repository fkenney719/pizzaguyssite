<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pizza Guys of Carbondale</title>
<link rel="stylesheet" href="css/styles.css">
<link rel="icon" href="assets/pizza.ico">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Domine" rel="stylesheet">
</head>
<body>
  <?php
    $subscriberEmail = $_POST['email'];
    $pizzaGuysEmail = "fkenney719@icloud.com";
    $emailSubject = "NEWSLETTER ADD: " . $subscriberEmail;
    $emailMessage = $subscriberEmail . " would like to receive info on any future changes to the menu, promotions, coupons, or updates.";

    mail($pizzaGuysEmail,$emailSubject,$emailMessage);
  ?>
  <div class="header-top-container">
    <ul class="header-top-content">
      <li class="header-top-object">
        <a href="tel:1-570-282-2206"><img src="images/phone-icon.png" alt="phone-icon" class="header-top-phone-icon"></a>
        <a href="tel:1-570-282-2206" class="phone-email-link"><span class="header-top-text">(570) 282-2206</span></a>
      </li>
      <li class="header-top-object">
        <a href="mailto:pizzaguysofcarbondale@gmail.com"><img src="images/mail_icon.png" alt="mail-icon" class="header-top-mail-icon"></a>
        <a href="mailto:pizzaguysofcarbondale@gmail.com" class="phone-email-link">
          <span class="header-top-text">pizzaguysofcarbondale@gmail.com</span></a>
      </li>
    </ul>
    <a href="order.html" target="_blank" class="order-button">ORDER!</a>
    <a href="https://m.facebook.com/PizzaGuysCarbondale/?_ft_=top_level_post_id.777185949135715%3Atl_objid.777185949135715%3Apage_id.485429804977999%3Athid.485429804977999%3A306061129499414%3A2%3A0%3A1514793599%3A3608725513566167138%3Apage_insights.%7B%22485429804977999%22%3A%7B%22role%22%3A1%2C%22page_id%22%3A485429804977999%2C%22post_context%22%3A%7B%22story_fbid%22%3A777185949135715%2C%22publish_time%22%3A1511822164%2C%22story_name%22%3A%22EntStatusCreationStory%22%2C%22object_fbtype%22%3A266%7D%2C%22actor_id%22%3A485429804977999%2C%22parent_story_name%22%3A%22EntStatusCreationStory%22%2C%22sl%22%3A4%2C%22targets%22%3A%5B%7B%22page_id%22%3A485429804977999%2C%22actor_id%22%3A485429804977999%2C%22role%22%3A1%2C%22post_id%22%3A777185949135715%2C%22share_id%22%3A0%7D%5D%7D%7D&__tn__=C-R" target="_blank">
    <img src="images/facebook-icon.png" alt="facebook-icon" class="header-top-facebook-icon"></a>
  </div>
  <div class="header-bottom-container">
    <div class="navbar">
      <a href="index.html"><img src="images/logo.png" alt="Pizza Guys Logo" class="logo"></a>
      <a href="index.html" class="navbar-buttons">Home</a>
      <a href="about.html" class="navbar-buttons">About Us</a>
      <div class="dropdown">
        <a href="menu.html"><button class="dropbtn">Menu</button></a>
        <div class="dropdown-content">
            <a href="menu.html#pizza-menu">Pizza</a>
            <a href="menu.html#sandwich-menu">Sandwiches/Wraps</a>
            <a href="menu.html#starter-menu">Starters/Salads</a>
        </div>
      </div>
      <div class="dropdown-mobile-display">
        <button class="dropbtn-mobile-display">&#9776;</button>
        <div class="dropdown-content-mobile-display">
            <a href="index.html">Home</a>
            <a href="about.html">About</a>
            <a href="menu.html">Menu</a>
        </div>
      </div>
    </div>
  </div>
  <p class="main-text">Thanks for signing up for e-mail updates. You'll now be redirected back to the main page.</p>
  <div class="footer-container">
    <a class="footer-link" href="https://m.facebook.com/PizzaGuysCarbondale/?_ft_=top_level_post_id.777185949135715%3Atl_objid.777185949135715%3Apage_id.485429804977999%3Athid.485429804977999%3A306061129499414%3A2%3A0%3A1514793599%3A3608725513566167138%3Apage_insights.%7B%22485429804977999%22%3A%7B%22role%22%3A1%2C%22page_id%22%3A485429804977999%2C%22post_context%22%3A%7B%22story_fbid%22%3A777185949135715%2C%22publish_time%22%3A1511822164%2C%22story_name%22%3A%22EntStatusCreationStory%22%2C%22object_fbtype%22%3A266%7D%2C%22actor_id%22%3A485429804977999%2C%22parent_story_name%22%3A%22EntStatusCreationStory%22%2C%22sl%22%3A4%2C%22targets%22%3A%5B%7B%22page_id%22%3A485429804977999%2C%22actor_id%22%3A485429804977999%2C%22role%22%3A1%2C%22post_id%22%3A777185949135715%2C%22share_id%22%3A0%7D%5D%7D%7D&__tn__=C-R" target="_blank">Facebook</a>
    <a class="footer-link" href="application.html">Apply for a Job With Us!</a>
    <p class="footer-address">46 N. Scott Street<br />
    Carbondale, PA 18407</p>
    <p class="copyright">© 2019 <a href="mailto:fkenney719@icloud.com" class="webmaster-email">Frank Kenney</a> and Pizza Guys of Carbondale.</p>
  </div>
  <script type="text/javascript">
      setTimeout(function(){ window.location.href = 'index.html'; } ,3500);
  </script>
</body>
