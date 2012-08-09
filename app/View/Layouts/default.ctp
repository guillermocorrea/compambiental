<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php echo Configure::read('AppName')?></title>
	<meta name="description" content="">
	<meta name="author" content="Luis Guillermo Correa">

	<meta name="viewport" content="width=device-width">
	<style>
	body {
	  padding-top: 60px;
	  padding-bottom: 40px;
	}
	</style>
	<?php echo $this->Html->css('bootstrap.min') ?>
	<?php echo $this->fetch('css'); ?>
	<?php echo $this->Html->css('style') ?>
</head>
<body>
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

    <?php echo $this->element('nav');?>
    
    <div class="container" role="main" id="main">

      <?php echo $this->Session->flash('auth');?>
    	<?php echo $this->fetch('content'); ?>

      <hr>

      <footer>
        <p>&copy; <?php echo Configure::read('AppName')?> 2012</p>
      </footer>

    </div> <!-- /container -->

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php echo debug($this)?>
    <?php echo $this->element('sql_dump'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
 	<?php echo $this->Html->script('lib/bootstrap.min.js') ?>
 	<?php echo $this->fetch('script'); ?>
    <?php echo $this->Html->script('scripts/main.js') ?>
</body>
</html>