

<?php if(empty($questions)): ?>
<p class="no_answer">No Questions yet. Be the first one to
post a Question!</p>
<?php else: ?>
<?php e($this->renderElement('question_list')); ?>
<dl>








<?php endif; ?>

<?php echo $html->link('Add Question', array('action'=>'add')); ?>




<?php e($javascript->link('home', false)); ?>