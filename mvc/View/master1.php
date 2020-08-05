<!DOCTYPE html>
<?php

$cookie_name =  ($data['session'])? $data['session'] : "Undefine";

$cookie_value = ($data['session'])? $data['session'] : "Undefine";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

?>
<html>
<head>
	<title>Shop mỹ phẩm</title>
	<meta charset="utf-8">
	<base href="http://localhost/fameworkMVC/index.php">
	<meta name="viewport" content="width = width-device ,initial-scale = 1">
	<link rel="stylesheet" type="text/css" href="./public/lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./public/lib/icon/fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="./public/lib/stylecss.css">
	<script type="text/javascript">
			setTimeout(function() { 
			    document.documentElement.scrollTop = 
			     document.body.scrollTop = 700; 
			}, 0); 
	</script>
</head>
<body>
	<?php require_once './mvc/View/block/Headerblock.php' ?>
    <?php require_once './mvc/View/block/Mainblock.php' ?>
    <?php require_once './mvc/View/block/Footerblock.php' ?>

<script type="text/javascript" src="./public/lib/bootstrap/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="./public/lib/bootstrap/js/popper.min.js"></script>
<script type="text/javascript" src="./public/lib/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./public/lib/stylejs.js"></script>
</body>
</html>