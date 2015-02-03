<?php if(empty($questions)): ?>
<p class="no_answer">No question matched.</p>
<?php else: ?>
<?php e($this->renderElement('question_list')); ?>
<?php endif; ?>