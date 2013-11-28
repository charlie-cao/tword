<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'user-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation' => false,
        ));
?>
<div class="form-group">
    <?php echo $form->label($model, 'username'); ?>
    <?php echo $form->textField($model, 'username', array('class' => 'form-control')); ?>
    <?php echo $form->error($model, 'username'); ?>
</div>
<div class="form-group">
    <?php echo $form->label($model, 'password'); ?>
    <?php echo $form->passwordField($model, 'password', array('type' => 'password', 'class' => 'form-control')); ?>
    <?php echo $form->error($model, 'password'); ?>
</div>
<?php echo CHtml::submitButton($model->isNewRecord ? '注册新用户' : '保存', array('class' => 'btn btn-success btn-lg btn-block')); ?>        
<?php $this->endWidget(); ?>

