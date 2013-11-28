<?php
/* @var $this UserController */
/* @var $model User */
$this->pageTitle = Yii::app()->name . ' - 用户注册';
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>