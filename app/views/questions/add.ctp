<?php echo $form->create('Question');?>
<fieldset>
<legend>Add New Question</legend>
<?php
echo $form->input('question');
echo $form->input('questioner');
?>
</fieldset>
<?php echo $form->end('Add Question');?>
<?php
echo $html->link('List All Questions', array('action'=>'home')); 
?>
