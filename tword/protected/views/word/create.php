<?php
/* @var $this WordController */
/* @var $model Word */

$this->breadcrumbs=array(
	'单词'=>array('index'),
	'添加新单词',
);

$this->menu=array(
	array('label'=>'List Word', 'url'=>array('index')),
	array('label'=>'Manage Word', 'url'=>array('admin')),
);
?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>