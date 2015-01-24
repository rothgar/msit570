<?php
include('include/inc_home_links_bar.php');
if (isset($_GET['section'])) {
  switch ($_GET['section']) {
    case 'zodiac':
      include('include/inc_chinese_zodiac.php');
      break;
    case 'php': // A value of 'php' means to display the default page
    default:
      include('include/inc_php_info.php');
      break;
   }
}
else // If no section has been selected, then display the default page
  include('include/inc_php_info.php');
?>
