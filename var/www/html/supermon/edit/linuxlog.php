<?php
include("../session.inc");
include("../common.inc");

// Author: Paul Aidukas KN2R (Copyright) July 15, 2013
// For ham radio use only, NOT for comercial use!
// Be sure to allow popups from your Allmon web server to your browser!!
// Update by KB4FXC 02/03/2018

?>
<html>
<head>
<title>Linux messages Log</title>
</head>
<body>
<pre>
<?php
	if ($_SESSION['sm61loggedin'] === true) {
		//$cmd = "$SUDO $JOURNALCTL --no-pager --since \"1 day ago\" | $SED -e \"/sudo/ d\"";
		//$cmd = "sudo journalctl --no-pager --since \"1 day ago\"";
		$cmd = "echo '/var/log/messages:'; $CAT /var/log/messages; echo; echo '/var/log/syslog:'; $CAT /var/log/syslog";
                echo "Commands: $cmd\n-----------------------------------------------------------------\n";
                passthru ($cmd);
                echo "\n\n";

	} else
		echo ("<br><h3>ERROR: You Must login to use this function!</h3>");
?>
</pre>
</body>
</html>
