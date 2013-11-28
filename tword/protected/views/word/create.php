<?php
/* @var $this WordController */
/* @var $model Word */

$this->breadcrumbs = array(
    '单词' => array('index'),
    '添加新单词',
);

$this->menu = array(
    array('label' => 'List Word', 'url' => array('index')),
    array('label' => 'Manage Word', 'url' => array('admin')),
);
?>
<?php $this->renderPartial('_form', array('model' => $model)); ?>

<script type="text/javascript">
    /*
     使用JSONP 
     有道翻译API申请成功
     API key：208917835
     keyfrom：twordwebapp
     创建时间：2013-11-28
     网站名称：twordwebapp
     网站地址：http://199.30.53.221/
     */
    $(function() {
        $("#auto_translate").click(function() {
            var text = $("#Word_word").val();
            $.ajax({
                type: "get",
                async: false,
                url: "http://fanyi.youdao.com/openapi.do",
                dataType: "jsonp",
                data: {keyfrom: "twordwebapp", key: "208917835", type: "data", doctype: "jsonp", callback: "show", version: "1.1", q: text},
                jsonp: "callback", //传递给请求处理程序或页面的，用以获得jsonp回调函数名的参数名(一般默认为:callback)
                jsonpCallback: "show", //自定义的jsonp回调函数名称，默认为jQuery自动生成的随机函数名，也可以写"?"，jQuery会自动为你处理数据
                success: function(json) {
                    //this is callback function ,deal with the json data
                    console.log(json);
                    $("#Word_translate").val(json.basic.explains[0]);
                    $("#Word_phonetic").val(json.basic.phonetic);
                },
                error: function() {
                    alert('fail');
                }
            });
        });
    });
</script>