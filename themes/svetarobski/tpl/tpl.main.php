<!DOCTYPE HTML>
<html>
	<head>
		<?php echo tpl('header', array('class' => $class)); ?>
	</head>
	<body<?php if(superAdmin()) echo ' class="admin"';?>>
	<?php if(superAdmin()) echo tpl('adminpanel'); ?>

	<div class="main <?php if($wrap) echo 'wrap';?>">
		<?php echo $content; ?>
	</div>


	</body>
</html>	