<?php
class QuestionsController extends AppController {
var $name = 'Questions';


function home() {
 $this->Question->recursive = 1;
  $this->set('questions', $this->Question->find('all'));
}



	function show( $id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid Question.');
			$this->redirect(array('action'=>'home'));
		}

		if (!empty($this->data) ) {

			$this->Question->Answer->create();
			if ($this->Question->Answer->save($this->data)) {
				$this->Session->setFlash('The Answer has been saved');
				$this->redirect(array('action' => 'show', $id), null, true);
			} else {
				$this->Session->setFlash('The Answer could not be saved. Please, try again.');
			}

		}

		$this->Question->recursive = 2;
		$this->set('question', $this->Question->read(null, $id));
	}

   function search() {

	}


function user_questions() {

if (!empty($this->data)) {
$this->layout = 'ajax';
Configure::write('debug', '0');
$this->set('questions', $this->Question->find('all',
array('conditions' => array('question LIKE' => '%'.$this->data['Search']['keyword'].'%'))));
}


}



function edit($id = null){
 if (!$id) {
 $this->Session->setFlash('Invalid Question');
 $this->redirect(array('action'=>'home'), null, true);
 }
 if (empty($this->data)) {
 $this->data = $this->Question->find(array('id' => $id));
 } else {
 if ($this->Question->save($this->data)) {
 $this->Session->setFlash('The Question has been saved');
 $this->redirect(array('action'=>'home'), null, true);
 } else {
 $this->Session->setFlash('The Question could not be saved.
 Please, try again.');
 }
 }
}


function delete($id = null) {
if (!$id) {
$this->Session->setFlash('Invalid id for Question');
$this->redirect(array('action'=>'home'), null, true);
}
if ($this->Question->delete($id)) {
$this->Session->setFlash('Question #'.$id.' deleted');
$this->redirect(array('action'=>'home'), null, true);
}
}


function add() {
if (!empty($this->data)) {
$this->Question->create();
if ($this->Question->save($this->data)) {
$this->Session->setFlash('The Question has been saved');
$this->redirect(array('action'=>'home'), null, true);
} else {
$this->Session->setFlash('Question not saved. Try again.');
}
}
}

function edit_answer($answer_id = null) {
		$this->layout = 'ajax';
		Configure::write('debug', '0');

		$answer = $this->Question->Answer->findById($answer_id);
		echo $this->data['Answer']['answer'];
		exit();
		if(!empty($this->data['Answer']['answer']) ) {
			$this->Question->Answer->id = $answer_id;
			$this->Question->Answer->saveField('answer', $this->data['Answer']['answer']);
			$this->set('answer', $this->data['Answer']['answer']);
		} else {
			$this->set('answer', $answer['Answer']['answer']);
		}
	}






}
?>