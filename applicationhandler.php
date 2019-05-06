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
    $pizzaGuysEmail = "fkenney719@icloud.com";
    // Applicant
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phoneNum = "(" . $_POST['areaCode'] . ") " . $_POST['phoneFirst3'] . "-" . $_POST['phoneLast4'];
    $email = $_POST['email'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2']; // form field not required
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $birthDate = $_POST['birthDate'];
    $position = $_POST['position'];
    $driversLicense = $_POST['driversLicense']; // form field not required
    $citizen = $_POST['citizen']; // form field not required
    $authorized = $_POST['authorized']; // form field not required
    // Employer 1
    $employer1 = $_POST['employer1'];
    $jobTitle1 = $_POST['jobTitle1'];
    $employer1Address1 = $_POST['employer1Address1'];
    $employer1Address2 = $_POST['employer1Address2']; // form field not required
    $employer1City = $_POST['employer1City'];
    $employer1State = $_POST['employer1State'];
    $employer1Zip = $_POST['employer1Zip'];
    $employer1PhoneNum = "(" . $_POST['employer1AreaCode'] . ") " . $_POST['employer1PhoneFirst3'] . "-" . $_POST['employer1PhoneLast4'];
    $employer1SupervisorName = $_POST['employer1SupervisorName'];
    $employer1DateBegan = $_POST['employer1DateBegan'];
    $employer1DateEnded = $_POST['employer1DateEnded'];
    $employer1Responsibilities = $_POST['employer1Responsibilities'];
    $employer1LeaveReason = $_POST['employer1LeaveReason'];
    $employer1MayContact = $_POST['employer1MayContact']; // form field not required
    // Employer 2 - all fields not required
    $employer2 = $_POST['employer2'];
    $jobTitle2 = $_POST['jobTitle2'];
    $employer2Address1 = $_POST['employer2Address1'];
    $employer2Address2 = $_POST['employer2Address2'];
    $employer2City = $_POST['employer2City'];
    $employer2State = $_POST['employer2State'];
    $employer2Zip = $_POST['employer2Zip'];
    $employer2PhoneNum = "(" . $_POST['employer2AreaCode'] . ") " . $_POST['employer2PhoneFirst3'] . "-" . $_POST['employer2PhoneLast4'];
    $employer2SupervisorName = $_POST['employer2SupervisorName'];
    $employer2DateBegan = $_POST['employer2DateBegan'];
    $employer2DateEnded = $_POST['employer2DateEnded'];
    $employer2Responsibilities = $_POST['employer2Responsibilities'];
    $employer2LeaveReason = $_POST['employer2LeaveReason'];
    $employer2MayContact = $_POST['employer2MayContact'];
    // Employer 3 - all fields not required
    $employer3 = $_POST['employer3'];
    $jobTitle3 = $_POST['jobTitle3'];
    $employer3Address1 = $_POST['employer3Address1'];
    $employer3Address2 = $_POST['employer3Address2'];
    $employer3City = $_POST['employer3City'];
    $employer3State = $_POST['employer3State'];
    $employer3Zip = $_POST['employer3Zip'];
    $employer3PhoneNum = "(" . $_POST['employer3AreaCode'] . ") " . $_POST['employer3PhoneFirst3'] . "-" . $_POST['employer3PhoneLast4'];
    $employer3SupervisorName = $_POST['employer3SupervisorName'];
    $employer3DateBegan = $_POST['employer3DateBegan'];
    $employer3DateEnded = $_POST['employer3DateEnded'];
    $employer3Responsibilities = $_POST['employer3Responsibilities'];
    $employer3LeaveReason = $_POST['employer3LeaveReason'];
    $employer3MayContact = $_POST['employer3MayContact'];
    // Education
    $highSchoolName = $_POST['highSchoolName'];
    $graduateHighSchool = $_POST['graduateHighSchool']; // form field not required
    $highSchoolEndDate = $_POST['highSchoolEndDate'];
    $collegeName = $_POST['collegeName']; // form field not required
    $graduateCollege = $_POST['graduateCollege']; // form field not required
    $collegeEndDate = $_POST['collegeEndDate']; // form field not required
    $otherSkills = $_POST['otherSkills']; // form field not required

    $emailSubject = "JOB APPLICANT: " . $firstName . " " . $lastName;
    $emailMessage = "APPLICANT INFORMATION\n\n";
    $emailMessage .= "Name: " . $firstName . " " . $lastName . "\n";
    $emailMessage .= "Phone #: " . $phoneNum . "\n";
    $emailMessage .= "E-mail address: " . $email . "\n";
    if (strlen($address2>0)) {
      $emailMessage .= "Address 1: " . $address1 . "\n";
      $emailMessage .= "Address 2: " . $address2 . "\n";
    }
    else {
      $emailMessage .= "Address: " . $address1 . "\n";
    }
    $emailMessage .= "City: " . $city . "\n";
    $emailMessage .= "Zip code: " . $zip . "\n";
    $emailMessage .= "Date of Birth: " . $birthDate . "\n";
    $emailMessage .= "Position applied for: " . $position . "\n";
    if ($driversLicense!=null)
      $emailMessage .= "Driver's license: " . $driversLicense . "\n";
    if ($citizen!=null)
      $emailMessage .= "U.S. Citizen?: " . $citizen . "\n";
    if ($authorized!=null)
      $emailMessage .= "Authorized to work in U.S.?: " . $authorized . "\n";
    $emailMessage .= "\nEMPLOYMENT HISTORY\n\nEmployer 1\n";
    $emailMessage .= "Most recent/current employer: " . $employer1 . "\n";
    $emailMessage .= "Job title: " . $jobTitle1 . "\n";
    if (strlen($employer1Address2>0)) {
      $emailMessage .= "Address 1: " . $employer1Address1 . "\n";
      $emailMessage .= "Address 2: " . $employer1Address2 . "\n";
    }
    else {
      $emailMessage .= "Address: " . $employer1Address1 . "\n";
    }
    $emailMessage .= "City: " . $employer1City . "\n";
    $emailMessage .= "State: " . $employer1State . "\n";
    $emailMessage .= "Zip code: " . $employer1Zip . "\n";
    $emailMessage .= "Phone #: " . $employer1PhoneNum . "\n";
    $emailMessage .= "Supervisor's name: " . $employer1SupervisorName . "\n";
    $emailMessage .= "Date employment began: " . $employer1DateBegan . "\n";
    $emailMessage .= "Date employment ended: " . $employer1DateEnded . "\n";
    $emailMessage .= "Responsibilities: " . $employer1Responsibilities . "\n";
    $emailMessage .= "Reason for leaving: " . $employer1LeaveReason . "\n";
    if ($employer1MayContact!=null)
      $emailMessage .= "May we contact this employer?: " . $employer1MayContact . "\n";
    if (strlen($employer2>0)) {
      $emailMessage .= "\nEmployer 2\n";
      $emailMessage .= "Next most recent/current employer: " . $employer2 . "\n";
      if (strlen($jobTitle2>0))
        $emailMessage .= "Job title: " . $jobTitle2 . "\n";
      if (strlen($employer2Address2>0)) {
        $emailMessage .= "Address 1: " . $employer2Address1 . "\n";
        $emailMessage .= "Address 2: " . $employer2Address2 . "\n";
      }
      else {
        $emailMessage .= "Address: " . $employer2Address1 . "\n";
      }
      if (strlen($employer2City>0))
        $emailMessage .= "City: " . $employer2City . "\n";
      if (strlen($employer2State>0))
        $emailMessage .= "State: " . $employer2State . "\n";
      if (strlen($employer2Zip>0))
        $emailMessage .= "Zip code: " . $employer2Zip . "\n";
      if (strlen($employer2PhoneNum>5))
        $emailMessage .= "Phone #: " . $employer2PhoneNum . "\n";
      if (strlen($employer2SupervisorName>0))
        $emailMessage .= "Supervisor's name: " . $employer2SupervisorName . "\n";
      if ($employer2DateBegan!=null)
        $emailMessage .= "Date employment began: " . $employer2DateBegan . "\n";
      if ($employer2DateEnded!=null)
        $emailMessage .= "Date employment ended: " . $employer2DateEnded . "\n";
      if (strlen($employer2Responsibilities>0))
        $emailMessage .= "Responsibilities: " . $employer2Responsibilities . "\n";
      if (strlen($employer2LeaveReason>0))
        $emailMessage .= "Reason for leaving: " . $employer2LeaveReason . "\n";
      if ($employer2MayContact!=null)
        $emailMessage .= "May we contact this employer?: " . $employer2MayContact . "\n";
    }
    if (strlen($employer3>0)) {
      $emailMessage .= "\nEmployer 3\n";
      $emailMessage .= "Next most recent/current employer: " . $employer3 . "\n";
      if (strlen($jobTitle3>0))
        $emailMessage .= "Job title: " . $jobTitle3 . "\n";
      if (strlen($employer3Address2>0)) {
        $emailMessage .= "Address 1: " . $employer3Address1 . "\n";
        $emailMessage .= "Address 2: " . $employer3Address2 . "\n";
      }
      else {
        $emailMessage .= "Address: " . $employer3Address1 . "\n";
      }
      if (strlen($employer3City>0))
        $emailMessage .= "City: " . $employer3City . "\n";
      if (strlen($employer3State>0))
        $emailMessage .= "State: " . $employer3State . "\n";
      if (strlen($employer3Zip>0))
        $emailMessage .= "Zip code: " . $employer3Zip . "\n";
      if (strlen($employer3PhoneNum>5))
        $emailMessage .= "Phone #: " . $employer3PhoneNum . "\n";
      if (strlen($employer3SupervisorName>0))
        $emailMessage .= "Supervisor's name: " . $employer3SupervisorName . "\n";
      if ($employer3DateBegan!=null)
        $emailMessage .= "Date employment began: " . $employer3DateBegan . "\n";
      if ($employer3DateEnded!=null)
        $emailMessage .= "Date employment ended: " . $employer3DateEnded . "\n";
      if (strlen($employer3Responsibilities>0))
        $emailMessage .= "Responsibilities: " . $employer3Responsibilities . "\n";
      if (strlen($employer3LeaveReason>0))
        $emailMessage .= "Reason for leaving: " . $employer3LeaveReason . "\n";
      if ($employer3MayContact!=null)
        $emailMessage .= "May we contact this employer?: " . $employer2MayContact . "\n";
    }
    $emailMessage .= "\nEDUCATION HISTORY\n\n";
    $emailMessage .= "Name of High School: " . $highSchoolName . "\n";
    if ($graduateHighSchool!=null)
      $emailMessage .= "Graduate or G.E.D.?: " . $graduateHighSchool . "\n";
    if ($highSchoolEndDate!=null)
      $emailMessage .= "Date you finished or left high school: " . $highSchoolEndDate . "\n";
    if (strlen($collegeName>0))
      $emailMessage .= "Name of College: " . $collegeName . "\n";
    if ($graduateCollege!=null)
      $emailMessage .= "Did you graduate?: " . $graduateCollege . "\n";
    if ($collegeEndDate!=null)
      $emailMessage .= "Date you finished or left college: " . $collegeEndDate . "\n";
    if (strlen($otherSkills>0))
      $emailMessage .= "Other relevant skills or abilities: " . $otherSkills . "\n";

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
  <p class="main-text">Thanks for applying. You'll now be redirected back to the main page.</p>
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
</html>
