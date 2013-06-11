<?php
?>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/repairlogin/css/bootstrap.css')?>"type="text/css"/>
<link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/repairlogin/css/demo.css')?>"type="text/css" />
<link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/repairlogin/css/base.css')?>" type="text/css" />
<style>
.nav-header
{

	background:#1B8A9B;
	height:150px;
}
.nav-header h1
{
	color:white;
	margin-top:50px;
	text-transform:capitalize;
}
#midle
{
	height:540px;
	width:1200px;
}
.left
{
	/*height:500px;
	float:left;
	margin-top:15px;*/
	
	
}
.right
{
	
	height:400px;
}
.right img
{
	width:100px;
	height:100px;
	
}
.container div
{
	float:left;
	height:400px;
	margin-top:30px;	
	margin-left:20px;
}
</style>
<body>
<div class="nav-header">
				<h1>Credit Repair Software</h1>
</div>
<div class="row" id="midle">
<div class="container">
<div class="left span5">
	<div class="span5">
		<h4>Clients Registration</h4>
		<a href="<?php echo $view['router']->generate('clientreg')?>" class="btn btn-info">Register</a>
		<h4>Affliate Registration</h4>
		<a href="<?php echo $view['router']->generate('affliatereg')?>" class="btn btn-info">Register</a>
	</div>
</div><!--End of left-->
<div class="right span5">
<img src="<?php echo $view['assets']->getUrl('bundles/repairlogin/images/login.jpg')?>">
	<div class="span6" id="login">
		<h4>If already a user please login</h4>
		<a href="<?php echo $view['router']->generate('login')?>" class="btn btn-info">Login</a>
	</div>
</div>
</div><!--End of container-->
</div><!--End of row-->
<?php echo $view->render('RepairLoginBundle:login:footer.html.php') ?>
</body>
</html>
