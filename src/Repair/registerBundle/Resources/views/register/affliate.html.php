<html>
<head>
<title>Affliate Registration</title>
<link rel="stylesheet" type="text/css" href="../src/Repair/LoginBundle/Resources/public/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../src/Repair/LoginBundle/Resources/public/css/demo.css">
<link rel="stylesheet" type="text/css" href="../src/Repair/LoginBundle/Resources/public/css/base.css">
<link rel="stylesheet" type="text/css" href="../src/Repair/registerBundle/Resources/public/css/register.css">
<style>
#midle
{
	height:700px;
}
#main input
{
	height:28px;
}

</style>
</head>
<body>
<?php echo $view->render('RepairLoginBundle:login:header.html.php') ?>
<div class="row" id="midle">
<div class="container">
<div class="span6" id="main">
<a href="<?php echo $view['router']->generate('index') ?>">Back</a>
<h3>Affliate Registration</h3>
	<form action="" method="post" class="form-inline">
    	  <?php echo $view['form']->row($form['username'])?>
    	   <?php echo $view['form']->row($form['password'])?>
	    <?php echo $view['form']->row($form['email'])?>
	    <?php echo $view['form']->rest($form) ?>
   	  <input type="submit" class="btn btn btn-info" value="submit">
        </form>
<!--end of span6-->
</div>
<!--end of container-->
</div>
<!--end of row-->
</div>
<?php echo $view->render('RepairLoginBundle:login:footer.html.php') ?>
</body>
</html>
