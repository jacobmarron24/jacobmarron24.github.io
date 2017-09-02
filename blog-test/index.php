<?php
require('Persistence.php');
$comment_post_ID = 1;
$db = new Persistence();
$comments = $db->get_comments($comment_post_ID);
$has_comments = (count($comments) > 0);
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Smashing HTML5!</title>
	<meta charset="utf-8" />
	
	<link rel="stylesheet" href="css/main.css" type="text/css" />

	<!--[if IE]>
	  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<!--[if lte IE 7]>
		<link rel="stylesheet" type="text/css" media="all" href="css/ie.css"/>
		<script src="js/IE8.js" type="text/javascript"></script><![endif]-->	
	<!--[if lt IE 7]>
		<link rel="stylesheet" type="text/css" media="all" href="css/ie6.css"/><![endif]-->

</head>

<body id="index" class="home">
	
	<header id="banner" class="body">
		
	</header>
	
	<section id="content" class="body">
	  
	  <article class="hentry">	
			<header>
				<h2 class="entry-title"><a href="#" rel="bookmark" title="Permalink to this Building a Pusher-powered Real-Time Commenting System">A Blog Post On Everything Fashion Design</a></h2>
			</header>
			
			<footer class="post-info">
				<abbr class="published" title="2012-02-10T14:07:00-07:00">
					2nd September 2017
				</abbr>

				<address class="vcard author">
					By <a class="url fn" href="#">Ashley Saeli</a>
				</address>
			</footer>
			
			<div class="entry-content">
				<p>Here is a platform for me to write and rant about all things fashion. Here is a platform for me to write and rant about all things fashion. Here is a platform for me to write and rant about all things fashion. Here is a platform for me to write and rant about all things fashion. Here is a platform for me to write and rant about all things fashion. Here is a platform for me to write and rant about all things fashion.</p>
				<p>Here is a platform for me to write and rant about all things fashion. Here is a platform for me to write and rant about all things fashion. Here is a platform for me to write and rant about all things fashion. Here is a platform for me to write and rant about all things fashion. Here is a platform for me to write and rant about all things fashion. Here is a platform for me to write and rant about all things fashion.</p>
			</div>
		</article>
		
		
			
	</section>
	
	<section id="comments" class="body">
	  
	  <header>
			<h2>Comments</h2>
		</header>

    <ol id="posts-list" class="hfeed<?php echo($has_comments?' has-comments':''); ?>">
      <li class="no-comments">Be the first to add a comment.</li>
      <?php
        foreach ($comments as &$comment) {
          ?>
          <li><article id="comment_<?php echo($comment['id']); ?>" class="hentry">	
    				<footer class="post-info">
    					<abbr class="published" title="<?php echo($comment['date']); ?>">
    						<?php echo( date('d F Y', strtotime($comment['date']) ) ); ?>
    					</abbr>

    					<address class="vcard author">
    						By <a class="url fn" href="#"><?php echo($comment['comment_author']); ?></a>
    					</address>
    				</footer>

    				<div class="entry-content">
    					<p><?php echo($comment['comment']); ?></p>
    				</div>
    			</article></li>
          <?php
        }
      ?>
		</ol>
		
		<div id="respond">

      <h3>Leave a Comment</h3>

      <form action="post_comment.php" method="post" id="commentform">

        <label for="comment_author" class="required">Your name</label>
        <input type="text" name="comment_author" id="comment_author" value="" tabindex="1" required="required">
        
        <label for="email" class="required">Your email</label>
        <input type="email" name="email" id="email" value="" tabindex="2" required="required">

        <label for="comment" class="required">Your message</label>
        <textarea name="comment" id="comment" rows="10" tabindex="4"  required="required"></textarea>

        <input type="hidden" name="comment_post_ID" value="<?php echo($comment_post_ID); ?>" id="comment_post_ID" />
        <input name="submit" type="submit" value="Submit comment" />
        
      </form>
      
    </div>
			
	</section>
	
	<!--section id="extras" class="body">
		<div class="blogroll">
			<h2>blogroll</h2>
			<ul>
				<li><a href="#" rel="external">HTML5 Doctor</a></li>
				<li><a href="#" rel="external">HTML5 Spec (working draft)</a></li>
				<li><a href="#" rel="external">Smashing Magazine</a></li>
				<li><a href="#" rel="external">W3C</a></li>
				<li><a href="#" rel="external">Wordpress</a></li>
				<li><a href="#" rel="external">Wikipedia</a></li>
				
				<li><a href="#" rel="external">HTML5 Doctor</a></li>
				<li><a href="#" rel="external">HTML5 Spec (working draft)</a></li>
				<li><a href="#" rel="external">Smashing Magazine</a></li>
				<li><a href="#" rel="external">W3C</a></li>
				<li><a href="#" rel="external">Wordpress</a></li>
				<li><a href="#" rel="external">Wikipedia</a></li>
				
				<li><a href="#" rel="external">HTML5 Doctor</a></li>
				<li><a href="#" rel="external">HTML5 Spec (working draft)</a></li>
				<li><a href="#" rel="external">Smashing Magazine</a></li>
				<li><a href="#" rel="external">W3C</a></li>
				<li><a href="#" rel="external">Wordpress</a></li>
				<li><a href="#" rel="external">Wikipedia</a></li><article class="hentry">	
			</ul>
		</div>
		
		<div class="social">
			<h2>social</h2>
			<ul>
				<li><a href="http://delicious.com/">delicious</a></li>
				<li><a href="http://digg.com/users/">digg</a></li>
				<li><a href="http://facebook.com/">facebook</a></li>
				<li><a href="http://www.last.fm">last.fm</a></li>
				<li><a href="http://website.com/feed/" rel="alternate">rss</a></li>
				<li><a href="http://twitter.com/">twitter</a></li>
			</ul>
		</div>
	</section-->
	
	<!--footer id="contentinfo" class="body">
		<address id="about" class="vcard body">
			<span class="primary">
				<strong><a href="#" class="fn url">Smashing Magazine</a></strong>
				<span class="role">Amazing Magazine</span>
			</span>
		
			<img src="images/avatar.gif" alt="Smashing Magazine Logo" class="photo" />
		
			<span class="bio">Smashing Magazine is a website and blog that offers resources and advice to web developers and web designers. It was founded by Sven Lennartz and Vitaly Friedman.</span>
		
		</address>
		
		<p>2005-2012 <a href="http://smashingmagazine.com">Smashing Magazine</a>.</p>
	</footer-->

</body>
</html>