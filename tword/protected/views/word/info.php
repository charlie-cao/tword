<?php
$this->pageTitle = Yii::app()->name . ' - 记忆统计';
?>
<div class="bs-callout bs-callout-warning" style="text-align: center">
    <h3>今天记住了<?= $word_count ?>个单词</h3>
    <div class="progress progress-striped active">
        <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?= $word_count ?>%">
            <span class="sr-only"><?= $word_count ?>% Complete</span>
        </div>
    </div>
    <h3>今天记住了<?= $word_count ?>个单词</h3>
    <div class="progress progress-striped active">
        <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?= $word_count ?>%">
            <span class="sr-only"><?= $word_count ?>% Complete</span>
        </div>
    </div>
    <h3>单词本总共<?= $word_count ?>个单词</h3>
    <div class="progress progress-striped active">
        <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?= $word_count ?>%">
            <span class="sr-only"><?= $word_count ?>% Complete</span>
        </div>
    </div>
    <h3>单词本总共<?= $word_count ?>个单词</h3>
    <div class="progress progress-striped active">
        <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?= $word_count ?>%">
            <span class="sr-only"><?= $word_count ?>% Complete</span>
        </div>
    </div>
</div>

<a class="btn btn-primary btn-lg btn-block" href="<?= $this->createUrl("word/create") ?>">
    <span class="glyphicon glyphicon-star"></span> 采集新单词
</a>

<a class="btn btn-danger  btn-lg btn-block" href="<?= $this->createUrl("word/view&id=1") ?>">
    <span class="glyphicon glyphicon-registration-mark"></span> 再记一个单词
</a>

