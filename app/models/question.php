<?php
class Question extends AppModel {
var $name = 'Question';

var $hasMany = array(
'Answer' => array(
'className' => 'Answer'
)
);


}
?>