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
    <img style="width: 200px; height: 200px;" src="<?php echo Yii::app()->request->baseUrl; ?>/images/pay.png" />
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

<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" style="text-align: center; padding-top: 20px;">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="6CJQPR85F8EUJ">
<input type="image" src="https://www.paypalobjects.com/zh_XC/C2/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal——最安全便捷的在线支付方式！">
<img alt="" border="0" src="https://www.paypalobjects.com/zh_XC/i/scr/pixel.gif" width="1" height="1">
</form>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46306157-1', 'app-net.org');
  ga('send', 'pageview');
</script>

<!-- 广告位：记单词登录页 -->
<script type="text/javascript" >BAIDU_CLB_SLOT_ID = "825248";</script>
<script type="text/javascript" src="http://cbjs.baidu.com/js/o.js"></script>