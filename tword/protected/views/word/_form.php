<?php
/* @var $this WordController */
/* @var $model Word */
/* @var $form CActiveForm */
?>

<div class="form-horizontal" role="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'word-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

        <div class="form-group">
		  <?php echo $form->labelEx($model,'单词',array('class'=>'col-sm-2 control-label')); ?>
          <div class="col-sm-10">
			<?php echo $form->textField($model,'word',array('size'=>60,'maxlength'=>255,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'word',array('class'=>'label label-danger')); ?>
          </div>
        </div>
		

        <div class="form-group">
		<?php echo $form->labelEx($model,'翻译',array('class'=>'col-sm-2 control-label')); ?>
          <div class="col-sm-10">
		<?php echo $form->textField($model,'translate',array('size'=>60,'maxlength'=>255,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'translate',array('class'=>'label label-danger')); ?>
          </div>
	</div>

        <div class="form-group">
		<?php echo $form->labelEx($model,'音标',array('class'=>'col-sm-2 control-label')); ?>
          <div class="col-sm-10">
		<?php echo $form->textField($model,'phonetic',array('size'=>60,'maxlength'=>255,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'phonetic',array('class'=>'label label-danger')); ?>
          </div>
	</div>

	<div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
		<?php echo CHtml::submitButton($model->isNewRecord ? '添加' : '保存',array('class'=>'btn btn-default')); ?>
		</div>
	</div>
	<blockquote>
	<?php echo $form->errorSummary($model); ?>
	</blockquote>
<?php $this->endWidget(); ?>

</div><!-- form -->