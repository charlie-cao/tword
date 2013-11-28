<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - 登录';
?>
<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'login-form',
    'enableClientValidation' => true,
    'clientOptions' => array(
        'validateOnSubmit' => true,
    ),
        ));
?>
<div class="text-center">
    <img style="width: 150px; height: 150px; border: 6px solid #FFA0A2" src="http://cli.clewm.net/qrcode/2013/11/28/1752408304.png" />
</div>
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
<div class="checkbox">
    <label>
        <?php echo $form->checkBox($model, 'rememberMe'); ?>
        <?php echo $form->label($model, 'rememberMe'); ?>
        <?php echo $form->error($model, 'rememberMe'); ?>
    </label>
</div>
<?php echo CHtml::submitButton(' 登录 ', array('class' => 'btn btn-success btn-lg btn-block')); ?> &nbsp;&nbsp;
<a href="<?= $this->createUrl("user/create") ?>" class="btn btn-info btn-lg btn-block">注册新用户</a>
<?php $this->endWidget(); ?>
