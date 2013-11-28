<?php
/**
 *	@model 			Blog
 *	@version		0.1.0
 *	@description	Responsible for handling posts and images for the blog
 *	@author			Jarne W. Beutnagel (jarne@beutnagel.dk)
 *	@system 		CMS Paul
 *	@license		Free for all
 */



/***********************************
 *	Model Definition
 ***********************************/
class Model_Blog extends Model {
	private $query;			// Empty variable that will hold the result from the database
	public function getPosts() {
		$sql =	"SELECT  
				posts.id,
				posts.title, 
				posts.content,  
				posts.authorId,  
				posts.timestamp,
				users.name 
				FROM posts
				INNER JOIN users 
				ON posts.authorId = users.id";
		$this->query = $this->db->query($sql);
		//var_dump($this->query);
		$posts = array();	// Create empty array for the posts
		$i = 0;				// Incremental counter
		foreach ($this->query as $row ) {	// Go through each post
			$posts[$i] = array(	// Add to $posts array
				'PostId' => $this->query[$i]['id'],
				'Title' => $this->query[$i]['title'],
				'AuthorId' => $this->query[$i]['authorId'],
				'AuthorName' => $this->query[$i]['name'],
				'Content' => $this->query[$i]['content'],
				'Timestamp' => $this->query[$i]['timestamp']
			);
			$i++;
		}	
		return $posts;	
	}
	static function getSinglePost($id) {
		$sql =	"SELECT  
				posts.id,
				posts.title, 
				posts.content,  
				posts.authorId,  
				posts.timestamp,
				users.name 
				FROM posts
				INNER JOIN users 
				ON posts.authorId = users.id
				WHERE posts.id = ".$id;
		$db = Database::getInstance();
		$query = $db->query($sql);
		if($db->countRows($query)>=1) {
		$post = array(
				'PostId' => $query[0]['id'],
				'Title' => $query[0]['title'],
				'AuthorId' => $query[0]['authorId'],
				'AuthorName' => $query[0]['name'],
				'Content' => $query[0]['content'],
				'Timestamp' => $query[0]['timestamp']
		);
		return $post;	
		} else {
			return null;
		}

	}
}

/***********************************
 *	Model Usage
 ***********************************/

$model = new Model_Blog;
$posts = $model->getPosts();
$model->add('Blog', array(
	'Posts' => $posts
));
//$this->model = $model;
unset($model);
if(isset($_GET['postId'])) {
	//$post = $this->getPost($_GET['postId']);
	echo "bob";
}

//var_dump(Controller::$data);
?>
