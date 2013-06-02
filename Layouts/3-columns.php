<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>PG Framework &hearts; 3-Column Layout</title>
	<link rel="stylesheet" href="./Stylesheets/screen.css" type="text/css" media="screen">
</head>
<body class="root">
	<?php include('./Templates/UI/Menus/linkbar.php'); ?>
	<div class="column third">Left</div
		><div class="column third">Center</div
			><div class="column third">Right</div>
	<div class="column third">Left</div
		><div class="column third">Center</div
			><div class="column third">Right</div>
	<div class="column third">Left</div
		><div class="column third">Center</div
			><div class="column third">Right</div>
	<div>
		<div class="column">Nested content</div>
	</div>
	<section>
	<?php include('./Templates/UI/Buttons/buttons.php'); ?>
	</section>
	<form>
		<fieldset>
			<legend></legend>
			<ul>
				<li>
					<label>Label</label>
					<input type="text" value="Label">
				</li>
			</ul>
		</fieldset>
	</form>
</body>
</html>
