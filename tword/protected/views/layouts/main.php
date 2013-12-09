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
        <!--link href="navbar-fixed-top.css" rel="stylesheet"-->
        <style>
            body { padding-top: 70px; padding-bottom: 70px; font-size: 16px;}
            .form-control {height: 46px;font-size: 16px;}
            .activeM a{color: tomato;  }
        </style>
        
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/public/bootstrap3/js/bootstrap.min.js"></script>

    </head>

    <body>
        <!-- Fixed navbar -->
        <div class="navbar navbar-default navbar-fixed-top" role="navigation" style="border-bottom: 2px solid #0e509e">
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
                    $this->widget('zii.widgets.CMenu', array(
                        'activeCssClass' => 'active',
                        'htmlOptions' => array('class' => 'nav navbar-nav navbar-right'),
                        'items' => array(
                            array('label' => '帮助', 'url' => array('site/page', 'view'=>'help')),
                            array('label' => '捐赠', 'url' => array('site/page', 'view'=>'pay')),
                            array('label' => '登录', 'url' => array('site/login'), 'visible' => Yii::app()->user->isGuest),
                            array('label' => '退出 (' . Yii::app()->user->name . ')', 'url' => array('site/logout'), 'visible' => !Yii::app()->user->isGuest)
                        ),
                    ));
                    ?>		
                </div><!--/.nav-collapse -->
            </div>
        </div>

        <div class="container" id="page">
            <?php echo $content; ?>
        </div><!-- page -->

        <div class="navbar-fixed-bottom nav-pills" style="background-color: #eee;border-top: 2px solid #0e509e">
            <?php
            $this->widget('zii.widgets.CMenu', array(
                'activeCssClass' => 'activeM',
                'htmlOptions' => array('class' => 'nav row text-center '),
                'encodeLabel' => false,
                'items' => array(
                    array('label' => '<span class="glyphicon glyphicon-dashboard"></span><br>记忆', 'url' => array('/word/info'), 'itemOptions' => array('class' => 'col-xs-3')),
                    array('label' => '<span class="glyphicon glyphicon-list"></span><br>列表', 'url' => array('/word/index'), 'itemOptions' => array('class' => 'col-xs-3')),
                    array('label' => '<span class="glyphicon glyphicon-plus"></span><br>添加', 'url' => array('/word/create'), 'itemOptions' => array('class' => 'col-xs-3')),
                    array('label' => '<span class="glyphicon glyphicon-user"></span><br>登录', 'url' => array('site/login'), 'itemOptions' => array('class' => 'col-xs-3'), 'visible' => Yii::app()->user->isGuest),
                    array('label' => '<span class="glyphicon glyphicon-log-out"></span><br>退出', 'url' => array('site/logout'), 'itemOptions' => array('class' => 'col-xs-3'), 'visible' => !Yii::app()->user->isGuest)
                ),
            ));
            ?>	
        </div>
    </body>
</html>
