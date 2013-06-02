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
	<section class="column">
		<h1>Base Styles</h1>
		<h2>Links</h2>
		<a href="##">Link</a>
		<a href="##" class="is-a-hover">Link, hover state</a>
		<a href="##" class="is-a-active">Link, active state</a>
		<a href="#" class="is-a-visited">Link, visited state</a>
	</section>
	<section class="column">
	<?php include('./Templates/UI/Buttons/buttons.php'); ?>
	</section>
	<form class="column">
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
