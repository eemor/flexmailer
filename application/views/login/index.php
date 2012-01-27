<!DOCTYPE html>
<html><head>
<title>Flexmailer | Home</title>
<meta charset="UTF-8">
<meta name="description" content="" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<script type="text/javascript" src="js/jquery.snippet.min.js"></script>                         <!-- SNIPPET -->
<script type="text/javascript" src="js/kickstart.js"></script>                                  <!-- KICKSTART -->
<link rel="stylesheet" type="text/css" href="css/kickstart.css" media="all" />                  <!-- KICKSTART -->
<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />                          <!-- CUSTOM STYLES -->
</head><body><a id="top-of-page"></a><div id="wrap" class="clearfix">
<!-- ===================================== END HEADER ===================================== -->


	<!-- 
	
		ADD YOU HTML ELEMENTS HERE
		
		Example: 2 Columns
	 -->
	 <div class="col_12">
	 	<h2>Flexmailer</h2>
	 </div>
	 <div class="col_12">
	 <ul class="breadcrumbs alt1">
	 	<li><a href="/">Flexmailer</a></li>
	 	<li><a href="">Login</a></li>
	 </ul>
	 </div>
	 
	 <div class="col_4">
	 	&nbsp;
	 </div>
	 
	 <div class="col_4">
	 <h5>Login</h5>
	 <form method="post" action="/login">
	 	<?php if ($msg) { echo('<div class="notice error">'.$msg.'</div>'); } ?>
	 	<label for="username">Username</label>
    	<input id="username" name="username" type="text" />
    	<label for="password">Password</label>
    	<input id="password" name="password" type="text" />
    	<button type="submit" class="small green">Log Me In</button>
	 </form>
	 </div>

	<div class="col_4">
	 	&nbsp;
	 </div>

<!-- ===================================== START FOOTER ===================================== -->
<div class="clear"></div>
<div id="footer">
&copy; Copyright 2011–2012 All Rights Reserved. This website was built with <a href="http://www.99lime.com">HTML KickStart</a>
<a id="link-top" href="#top-of-page">Top</a>
</div>

</div><!-- END WRAP -->
</body></html>