<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>添加社区</title>
    <link rel="stylesheet" href="/personalBlog/Public/admin/css/pintuer.css">
    <link rel="stylesheet" href="/personalBlog/Public/admin/css/admin.css">
    <script src="/personalBlog/Public/admin/js/jquery.js"></script>
    <script src="/personalBlog/Public/admin/js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel margin-top">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加栏目</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="/personalBlog/index.php/Admin/Community/add">
      <input type="hidden" name="id"  value="" />  
      <div class="form-group">
        <div class="label">
          <label>社区名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="title" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>社区URL：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="url" data-validate="required:请输入URL" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>排序：</label>
        </div>
        <div class="field">
          <input type="number" class="input w50" name="sort" value=""  data-validate="required:,number:排序必须为数字" />
          <div class="tips"></div>
        </div>
      </div>
     <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
<script src="/personalBlog/Public/ueditor/ueditor.config.js"></script>
<script src="/personalBlog/Public/ueditor/ueditor.all.js"></script>
<script>
    var ue = UE.getEditor('ueditor');
    var fileBtn = $("#fileField");
    fileBtn.on("change", function(){
        var index = $(this).val().lastIndexOf("\\");
        var sFileName = $(this).val().substr((index+1));
        $("#url1").val(sFileName);
    });
</script>
</body>
</html>