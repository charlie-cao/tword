<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name . ' - 意见 & 捐赠';
?>
<div class="form-horizontal" role="form">
    记单词是一个个人维护的网络服务，希望得到您的宝贵意见和捐赠。
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'suggestion-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'email', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'email', array('class' => 'label label-danger')); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, '意见', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-10">
            <?php echo $form->textArea($model, 'content', array('rows'=>6, 'cols'=>50, 'maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'content', array('class' => 'label label-danger')); ?>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <?php echo CHtml::submitButton($model->isNewRecord ? '提交意见' : '保存', array('class' => 'btn btn-warning  btn-lg btn-block')); ?>
        </div>
    </div>

    <?php $this->endWidget(); ?>

</div>
