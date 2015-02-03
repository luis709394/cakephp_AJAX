

<h2><?php e($question['Question']['question']) ?>?</h2>

	<?php e($form->create('Answer', array('url' => array('controller' => 'questions', 'action' => 'show', $question['Question']['id']))));?>
		<fieldset>
			<?php e($form->hidden('question_id', array('value' => $question['Question']['id']))); ?>
			<?php echo $form->input('answer', array('label' => 'Your Answer')); ?>
                        <?php echo $form->input('answerer', array('label' => 'Your Name'));?>
                        
			<?php e($form->submit('Post Your Answer', array('div' => false, 'class' => 'submitbutton'))); ?>
		</fieldset>
	<?php e($form->end()); ?>


<?php if(empty($question['Answer'])): ?>
	<p class="no_answer">No Answers yet. Be the first one to answer!</p>
<?php else: ?>
	<dl>
	<?php foreach($question['Answer'] as $answer) : ?>
		<dd><span id='answer_<?php e($answer['id']) ?>'><?php e($answer['answer']); ?></span></dd>
			<?php e($ajax->editor('answer_'.$answer['id'], array('controller' => 'questions', 'action' => 'edit_answer', $answer['id']), array('callback' => "return 'data[Answer][answer]=' + escape(value)"))); ?>
	<?php endforeach; ?>
	</dl>
<?php endif; ?>