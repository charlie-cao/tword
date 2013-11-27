<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="记单词">
    <meta name="author" content="charlie">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/public/bootstrap3/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
	<style>
	body { padding-top: 70px; padding-bottom: 70px;}
	</style>
</head>

<body>
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?php echo CHtml::encode($this->pageTitle); ?></a>
        </div>
        <div class="navbar-collapse collapse">
		
		<?php 
		$this->widget('zii.widgets.CMenu',array(
			'activeCssClass'=>'active',
			'htmlOptions'=>array('class'=>'nav navbar-nav navbar-right'),
			'items'=>array(
				array('label'=>'单词列表', 'url'=>array('/word/index')),
				array('label'=>'添加单词', 'url'=>array('/word/create')),
				array('label'=>'记忆统计', 'url'=>array('/word/info')),
				array('label'=>'登录', 'url'=>array('site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'退出 ('.Yii::app()->user->name.')', 'url'=>array('site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); 
		?>		
        </div><!--/.nav-collapse -->
      </div>
    </div>
	
<div class="container" id="page">
	<?php echo $content; ?>
</div><!-- page -->
<div class="navbar-fixed-bottom" style="background-color: #eee;border-top: 2px solid #0e509e">
    <ul class="nav row text-center">
        <li class="col-xs-3"><a href="#"><span class="glyphicon glyphicon-adjust"></span><br>按钮</a></li>
        <li class="col-xs-3"><a href="#"><span class="glyphicon glyphicon-adjust"></span><br>按钮</a></li>
        <li class="col-xs-3"><a href="#"><span class="glyphicon glyphicon-adjust"></span><br>按钮</a></li>
        <li class="col-xs-3 active"><a href="#"><span class="glyphicon glyphicon-adjust"></span><br>按钮</a></li>
      </ul>
</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/public/bootstrap3/js/bootstrap.min.js"></script>
</body>
</html>
