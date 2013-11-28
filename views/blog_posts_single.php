<?php
/**
 *	@view 			Blog Single Post
 *	@version		0.1.0
 *	@description	Detailed view of a single posts
 *	@author			Jarne W. Beutnagel (jarne@beutnagel.dk)
 *	@system 		CMS Paul
 *	@license		Free for all
 */

/***********************************
 *	View Definition
 ***********************************/
class View_Blog_Single_Post extends View {
	public function loadPost() {
		if(isset($_GET['postId'])) {
			//$post = $this->getPost($_GET['postId']);
			return Model_Blog::getSinglePost($_GET['postId']);
		} else {
			return null;
		}
	}
}


/***********************************
 *	View Usage
 ***********************************/
$blog = new View_Blog_Single_Post;
$post = $blog->loadPost();
//var_dump($post);
//var_dump($this->model->getPosts()	);

/***********************************
 *	View Output
 ***********************************/
if($post !== null) {
?>
<h4 class="title">Latest Posts</h4>
<?php
?>
<article>
	<h2><a href="post.php?postId=<?php echo $post['PostId'];?>"><?php echo $post['Title'];?></a></h2>
	<span>Posted by <a href="users.php?userId=<?php echo $post['AuthorId'];?>"><?php echo $post['AuthorName'];?></a> <?php echo $post['Timestamp'];?></span>
	<p><?php echo $post['Content'];?></p>
</article>
<?php
}
?>