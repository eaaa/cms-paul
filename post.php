<?php 
/***********************************
 *	Page Headers
 ***********************************/
include_once('includes/header.php');


/***********************************
 *	Set Models to be used
 ***********************************/
$controller->setModel('blog');
//$controller->setModel('comments');




/***********************************
 *	Page Structure
 ***********************************/
?>

<section>
	<?php $controller->insertView('blog_posts_single');?>
</section>



<?php 


/***********************************
 *	Page Footer
 ***********************************/
include_once('includes/footer.php');
?>