<?php echo $form->create('Question');?>
<fieldset>
<legend>Edit Question</legend>
<?php
echo $form->hidden('id');
echo $form->input('questioner');
echo $form->input('question');
?>
</fieldset>
<?php echo $form->end('Save');?>
<?php echo $html->link('List All Questions', array('action'=>'
home')); ?><br />
<?php echo $html->link('Add Question', array('action'=>'add')); ?>