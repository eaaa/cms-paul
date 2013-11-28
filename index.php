<?php 
/***********************************
 *	Page Headers
 ***********************************/
include_once('includes/header.php');


/***********************************
 *	Set Models to be used
 ***********************************/
$controller->setModel('blog');
$controller->setModel('comments');
$controller->setModel('gallery');




/***********************************
 *	Page Structure
 ***********************************/
?>

<section><?php //$controller->setView('gallery');?></section>
<section>
	<?php $controller->insertView('blog_list',array('max_posts'=>5));?>
</section>
<aside><?php //$controller->setView('blog_popular');?></aside>
<article><?php //$controller->setView('blog_popular');?></article>
<aside><?php //$controller->setView('blog_posts_single');?></aside>
<footer><?php //$controller->setView('comments');?></footer>

<?php 


/***********************************
 *	Page Footer
 ***********************************/
include_once('includes/footer.php');
?>