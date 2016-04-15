<!DOCTYPE html>
<html lang="en-US">
<head>
	<title><?=$title;?></title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
	<?php include "elements/_form.php"; ?>
	<div class="container">
		<?php if(isset($content)){ include 'elements/' . $content; }?>
	</div>
</body>
</html>
