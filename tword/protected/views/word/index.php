<?php
/* @var $this WordController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'单词列表',
);
?>


<table class="table table-striped">
        <thead>
          <tr>
            <th>单词</th>
            <th>翻译</th>
            <th>音标</th>
            <th>日期</th>
          </tr>
        </thead>
        <tbody>
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
		)); ?>
        </tbody>
      </table>
