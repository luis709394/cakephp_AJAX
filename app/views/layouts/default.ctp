<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
	<title>Silly Questions</title>
	<?php e($javascript->link('prototype')); ?> 
	<?php e($scripts_for_layout); ?>
	<?php e($html->css('quickwall')); ?>
	<!--[if IE 6]>
		<?php e($html->css('quickwall_ie6hack')); ?>
	<![endif]-->
</head>
<body>
	<div id="content">
	
		<div id="user_menu">
			|<?php e($html->link('Home', array('controller' => 'questions', 'action' => 'home'))); ?>|
				<?php e($html->link('Search', array('controller' => 'questions', 'action' => 'search'))); ?>|
		</div>
		
		<?php e($html->image('loading.gif', array('id' => 'loader', 'style' => 'display:none'))); ?>
		
		<h1><?php e($html->link('Silly Questions', array('controller' => 'questions', 'action' => 'home'))); ?></h1>
		
		<div id='js_errors' class='message' style='display:none'></div>
		

		<?php
		if ($session->check('Message.flash')):
			$session->flash();
		endif;
		?>


		<?php e($content_for_layout); ?>
		
		
		<div id="footer">
		</div>	

	</div>
</body>
</html>