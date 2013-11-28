<?php
//include 'classes/model.php';
class Model_Comments extends Model {

}

$model = new Model_Comments;
$model->add('Comments',array(
	'postId' => 12,
	'title' => "This is a test comment"
	));
unset($model);

$data['title'] = "hi there";

//var_dump(Controller::$data);
?>
