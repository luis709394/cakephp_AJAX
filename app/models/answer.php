<?php
class Answer extends AppModel {
var $name = 'Answer';

var $belongsTo = array(
'Question' => array(
'className' => 'Question'
)
);
}
?>