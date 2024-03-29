<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>the first five pages (prototype)</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <link href="assets/css/ricky-css.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div id="page">
     <?php include ('header.php'); ?>
  	 <div class="container">
        <img id="loading-icon" src="assets/img/ajax-loader.gif" />
        <div id="readingStats">
		    <div class="titleStats currentTitle">
			    <div class="currentAllTime">Current</div>
			    <div class="readNumbers">24</div>
			</div>
			<div class="titleStats">
			    <div class="currentAllTime">All Time</div>
				<div class="readNumbers">157</div>
			</div>
      </div>
	  </div>
  	   <div class="titleBars">Today's Previews</div>

	   
	   <div id="previews">
	   <div class="storyPreview">
       <?php include ('storyPreviews.php'); ?>
	   
	   
	   </div>
	   </div>
       </div>
      <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
      <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/stumble.js"></script>
    </div>
	</div>
  </body>
</html>
