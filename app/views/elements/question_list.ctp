<dl>
<?php foreach ($questions as $question): ?>
<dt><span><?php e($question['User']['username']); ?>
</span></dt>
<dd>
<?php e($html->link($question['Question']['question'].'?',
array('controller' => 'questions', 'action'
=> 'show', $question['Question']['id']))); ?>
<?php
$answer_count = count($question['Answer']);
if(!$answer_count)
e("(no answers yet)");
else if($answer_count == 1)
e("(1 answer)");
else
e("(".$answer_count." answers)");
?>
</dd>

<?php echo $html->link('Edit', array('controller' => 'questions','action'=>'edit',
$question['Question']['id']));?>
<span>&nbsp</span>
<?php echo $html->link('Delete', array('action'=>'delete',
$question['Question']['id']), null, 'Are you sure you want to delete this question?');
?>


<?php endforeach; ?>
</dl>