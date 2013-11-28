<?php
//include 'classes/model.php';
class Model_Gallery extends Model {
	private $images;
	public function getImages() {
		if($this->images===null) {
			$this->images = array(
				'title' => 'this is the test title'
				);
		}
		return $this->images;
	}
}

$model = new Model_Gallery;
$model->add('Gallery',array(
	'images' => $model->getImages(),
	'title' => "This is a test comment"
	));
unset($model);


//var_dump(Controller::$data);
?>
