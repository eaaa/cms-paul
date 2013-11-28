<?php
/**
 *	@view 			Blog List
 *	@version		0.1.0
 *	@description	Short list of posts
 *	@author			Jarne W. Beutnagel (jarne@beutnagel.dk)
 *	@system 		CMS Paul
 *	@license		Free for all
 */

/***********************************
 *	View Definition
 ***********************************/
class View_Blog_List extends View {
	public function getPosts() {
		return $this->data['Blog']['Posts'];		
	}
}


/***********************************
 *	View Usage
 ***********************************/
$blog = new View_Blog_List;
$posts = $blog->getPosts();
$max_posts = $settings['max_posts'];

/***********************************
 *	View Output
 ***********************************/
?>
<h4 class="title">Latest Posts</h4>
<?php
$i = 1;
foreach ($posts as $post) {
	if($i <= $max_posts) {
		?>
		<article>
			<h2><a href="post.php?postId=<?php echo $post['PostId'];?>"><?php echo $post['Title'];?></a></h2>
			<span>Posted by <a href="users.php?userId=<?php echo $post['AuthorId'];?>"><?php echo $post['AuthorName'];?></a> <?php echo $post['Timestamp'];?></span>
			<p><?php echo $post['Content'];?></p>
		</article>
		<?php
		$i++;
	}
}
?>

















<?php /*
<em>Using OOP to get the data</em>
<h1><?php echo $blog->getTitle();?></h1>
<em>Get the same data with procedural code</em>
<h1><?php echo $data['Blog']['title'];?></h1>
<?php $data['Blog']['title'] = 'This title is now overwritten';?>
<p>Problems with this method: <em><?php echo $data['Blog']['title'];?></em></p>
*/?>
