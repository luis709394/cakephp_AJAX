<?php 

echo $form->create('Search');
echo $form->input('keyword');
echo $ajax->submit('Search for questions', array('url'=> array('controller'=>'questions', 'action'=>'user_questions'), 'update' => 'questionList'));
echo $form->end();

?>

<div id="questionList"></div>


