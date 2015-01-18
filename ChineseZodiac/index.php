<!DOCTYPE html>

<html lang="en">

<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Chinese Zodiac</title>
</head>

<body>

<div id="header">
<?php include_once(__DIR__.'/include/inc_header.php') ?>
</div>

<div id="txtnav">
<?php include_once(__DIR__.'/include/inc_text_links.php') ?>
</div>

<div id="btnnav">
<?php include_once(__DIR__.'/include/inc_button_nav.php') ?>
</div>

<div>
if (isset($_GET['page'])) {
  switch ($_GET['page']) {
    case 'site_layout':
      include('includes/' . 'inc_site_layout.php');
      break;
    case 'control_structures':
      include('includes/' . 'inc_control_structures.php');
      break;
    case 'string_functions':
      include('includes/' . 'inc_string_functions.php');
      break;
    case 'web_forms':
      include('includes/' . 'inc_web_forms.php');
      break; 
    case 'midterm_assessment':
      include('includes/' . 'inc_midterm_assessment.php');
      break;
    case 'state_information':
      include('includes/' . 'inc_state_information.php');
      break;
    case 'user_templates':
      include('includes/' . 'inc_user_templates.php');
      break;
    case 'final_project':
      include('includes/' . 'inc_final_project.php');
      break;
    case 'home_page': // A value of 'home_page' means to display the default page
    default:
      include('includes/inc_home.php');
      break;
    }
}
else // If no button has been selected, then display the default page
  include('includes/inc_home.php');
</div>

<div id="footer">
<?php include_once(__DIR__.'/include/inc_footer.php') ?>
</div>

</body>

</html>
