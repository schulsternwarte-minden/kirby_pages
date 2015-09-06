<?php snippet('header') ?>
<body>
	<div class="leftcol">
		<img src="<?php echo url('assets/images/kuppel250.jpg') ?>" width=250" height="" alt="<?php echo html($site->title()) ?>" />
		<?php snippet('submenu') ?>
	</div>

	<div class="rightcol">
		<h1>Schulsternwarte Minden</h1>

		<?php snippet('menu') ?>

		<div class="content">
			<h1><?php echo html($page->title()) ?></h1>
			<?php echo kirbytext($page->text()) ?>
		</div>

		<?php snippet('footer') ?>
	</div>
</body>

</html>
