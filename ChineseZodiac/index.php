<!DOCTYPE html>

<html lang="en">

<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Chinese Zodiac</title>
</head>

<body>

<div id="wrapper">
  <div id="header">
    <?php include_once(__DIR__.'/include/inc_header.php') ?>
  </div>

  <div id="txtnav">
    <p><?php include_once(__DIR__.'/include/inc_text_links.php') ?></p>
  </div>

  <div id="btnnav">
    <p><?php include_once(__DIR__.'/include/inc_button_nav.php') ?></p>
  </div>

  <div id="section">
    <p><?php
    If (isset($_GET['page'])) {
      switch ($_GET['page']) {
        case 'site_layout':
          include('include/' . 'inc_site_layout.php');
          break;
        case 'control_structures':
          include('include/' . 'inc_control_structures.php');
          break;
        case 'string_functions':
          include('include/' . 'inc_string_functions.php');
          break;
        case 'web_forms':
          include('include/' . 'inc_web_forms.php');
          break; 
        case 'midterm_assignment':
          include('include/' . 'inc_midterm_assignment.php');
          break;
        case 'state_information':
          include('include/' . 'inc_state_information.php');
          break;
        case 'user_templates':
          include('include/' . 'inc_user_templates.php');
          break;
        case 'final_project':
          include('include/' . 'inc_final_project.php');
          break;
        case 'home_page': // A value of 'home_page' means to display the default page
        default:
          include('include/inc_home.php');
          break;
        }
    } else { 
      // If no button has been selected, then display the default page
      include('include/inc_home.php');
    }
?></p>
</div>

  <div id="footer">
    <p><?php include_once(__DIR__.'/include/inc_footer.php') ?></p>
  </div>
</div> <!-- wrapper -->
</body>

</html>
