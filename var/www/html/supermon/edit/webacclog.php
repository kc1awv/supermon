<?php
include("../session.inc");
include("../global.inc");
include("../common.inc");

// Author: Paul Aidukas KN2R (Copyright) July 15, 2013
// For ham radio use only, NOT for comercial use!
// Be sure to allow popups from your Supermon web server to your browser!!

?>
<html>
<head>
<title>Web Server access_log</title>
</head>
<body>
<pre>
<?php
	if ($_SESSION['sm61loggedin'] === true) {
                $file = $WEB_ACCESS_LOG;                 // Defined in common.inc
		echo "File: $file\n-----------------------------------------------------------------\n";
		echo file_get_contents($file);
	} else
		echo ("<br><h3>ERROR: You Must login to use this function!</h3>");
?>
</pre>
</body>
</html>
