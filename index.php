<?php

include '_class/cms_class.php';

$obj = new modernCMS();

//Setup Our Connection Vars
$obj->host = 'chrome-clan.de';
$obj->username = 'web645';
$obj->password = 'Chrome';
$obj->db = 'homepage';

// Connect to our DB
$obj->connect();

?>

<!DOCTYPE html>
<html>

<head>
<title>My Modern CMS</title>
<link rel="stylesheet" href="styles/main.css" type="text/css" media="screen">
</head>

<body>
<div id="page-wrap">
	
<?php include 'nav.php'; ?>
	<?php
		if(isset($_GET['id'])):
			$obj->get_content($_GET['id']);
		else:
			$obj->get_content();
		endif;
	?>
</div>
</body>
</html>