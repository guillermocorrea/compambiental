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
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width">
	<style>
	body {
	  padding-top: 60px;
	  padding-bottom: 40px;
	}
	</style>
	<?php echo $this->Html->css('bootstrap.min') ?>
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
    <?php echo $this->Html->script('scripts/require-jquery.js', array('data-main' => '/caketrap/js/scripts/main')) ?>
    <?php echo $this->element('sql_dump'); ?>
    <?php echo debug($this)?>
</body>
</html>
