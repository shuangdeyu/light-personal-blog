<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:67:"D:\wamp\www\light-blog/application/index\view\admin\images_add.html";i:1497683529;s:63:"D:\wamp\www\light-blog/application/index\view\public\admin.html";i:1497521267;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="Bookmark" href="favicon.ico" >
    <link rel="Shortcut Icon" href="favicon.ico" />

    
<link rel="stylesheet" type="text/css" href="__HUI__/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="__HUI__/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="__HUI__/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="__HUI__/h-ui.admin/skin/default/skin.css" />
<link rel="stylesheet" type="text/css" href="__HUI__/h-ui.admin/css/style.css" />
<link rel="stylesheet" type="text/css" href="__CSS__/admin.css" />
<link rel="stylesheet" type="text/css" href="__HUI__/fileinput/fileinput.css" />


    <title>xiaofan-admin</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
</head>
<body>








<article class="page-container">
    <form class="form form-horizontal" id="form-article-add" action="<?php echo url('index/admin/images_save'); ?>" method="post" enctype="multipart/form-data">
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">图片：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input name="Photo[]" id="file-1" type="file" data-show-cancel="false" multiple />
            </div>
        </div>

        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                <div class="row cl">
                    <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                        <button class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存</button>
                        <button class="btn btn-default radius" type="reset">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</article>


<script type="text/javascript" src="__HUI__/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__HUI__/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__HUI__/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="__HUI__/h-ui.admin/js/H-ui.admin.page.js"></script>


<script type="text/javascript" src="__HUI__/fileinput/fileinput.js"></script>
<script>
    $("#file-1").fileinput({
        showUpload: false,
        showCaption: false,
        browseClass: "btn btn-primary btn-default",
        fileType: "any",
        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
    });
</script>


</body>
</html>