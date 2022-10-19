<?php
include('../session.inc');

// Author: Paul Aidukas KN2R (Copyright) July 15, 2013
// For ham radio use only, NOT for comercial use!

if ($_SESSION['sm61loggedin'] === true) {

   $button = @trim(strip_tags($_POST['button']));

   $out = array();
   if ($button == 'astreload') {
      print "<b>Executing: asterisk -rx \"Iax2, Rpt, & DialPlan Reloads\" ... </b> ";
      exec('export TERM=vt100 && sudo /usr/sbin/asterisk -rx "module reload"', $out);
      usleep(2000000);
      exec('export TERM=vt100 && sudo /usr/sbin/asterisk -rx "rpt reload"', $out);
      usleep(1000000);
      exec('export TERM=vt100 && sudo /usr/sbin/asterisk -rx "dialplan reload"', $out);
   }

} else {
   print "<br><h3>ERROR: You Must login to use the 'Iax/Rpt/DP RELOAD' function!</h3>";
}

?>
