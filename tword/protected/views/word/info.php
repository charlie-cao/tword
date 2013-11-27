<button class="btn btn-lg  btn-success"  ><span class="glyphicon glyphicon-star"></span> 采集新单词</button>

<div class="row">
    <div class="col-md-6">今天记住了<?= $word_count ?>个单词</div>
    <div class="col-md-6">单词本总共<?= $word_count ?>个单词</div>
</div>

<button class="btn btn-lg  btn-danger"   ><span class="glyphicon glyphicon-registration-mark"></span> 再记一个单词</button>


<h5>记忆进度</h5>
<div class="progress progress-striped active">
    <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: <?= $word_count ?>%">
        <span class="sr-only"><?= $word_count ?>% Complete</span>
    </div>
</div>
<div class="list-group">
  <a href="#" class="list-group-item active">
    <h4 class="list-group-item-heading">List group item heading</h4>
    <p class="list-group-item-text">...</p>
    <p class="list-group-item-text">...</p>
    <p class="list-group-item-text">...</p>
    <p class="list-group-item-text">...</p>
    <p class="list-group-item-text">...</p>
  </a>
</div>