<a class="btn btn-primary btn-lg btn-block" href="<?= $this->createUrl("word/create") ?>">
    <span class="glyphicon glyphicon-star"></span> 采集新单词
</a>

<div class="bs-callout bs-callout-warning" style="height:400px; text-align: center">
    <h1>记忆进度</h1>
    <div class="progress progress-striped active">
        <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?= $word_count ?>%">
            <span class="sr-only"><?= $word_count ?>% Complete</span>
        </div>
    </div>
    <h1>今天记住了<?= $word_count ?>个单词</h1>
    <h1>单词本总共<?= $word_count ?>个单词</h1>
</div>

<a class="btn btn-danger  btn-lg btn-block"   >
    <span class="glyphicon glyphicon-registration-mark"></span> 再记一个单词
</a>

