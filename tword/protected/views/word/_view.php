<?php
/* @var $this WordController */
/* @var $data Word */
?>
          <tr>
            <td><?php echo CHtml::encode($data->word); ?></td>
            <td><?php echo CHtml::encode($data->translate); ?></td>
            <td><?php echo CHtml::encode($data->phonetic); ?></td>
            <td><?php echo CHtml::encode($data->create_time); ?></td>
          </tr>
