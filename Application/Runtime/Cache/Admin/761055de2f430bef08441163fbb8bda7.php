<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="/personalBlog/Public/admin/css/pintuer.css">
<link rel="stylesheet" href="/personalBlog/Public/admin/css/admin.css">
<script src="/personalBlog/Public/admin/js/jquery.js"></script>
<script src="/personalBlog/Public/admin/js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="" enctype="multipart/form-data">
      <div class="form-group">
        <div class="label">
          <label>标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo ($article["title"]); ?>" name="title" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>图片：</label>
        </div>
        <div class="field">
          <input type="text" id="url1" name="" class="input tips" style="width:25%;float:left;"  value="<?php echo ($article["pic"]); ?>" style="cursor:pointer;"/>
          <input type="file" name="pic" class="button margin-left;" style="display:none;" id="fileField" size="28" />
          <input type="button" class="button bg-blue margin-left" id="image1" value="+ 选取图片" onclick="getElementById('fileField').click()" >
          <div class="tipss">图片尺寸：500*500</div>
        </div>
      </div>
      
      <?php if($iscid == 1): ?><div class="form-group">
          <div class="label">
            <label>分类标题：</label>
          </div>
          <div class="field">
            <select name="cateid" class="input w50">
              <option value="">请选择分类</option>
              <option value="0">小程序分类</option>
              <option value="1">PHP分类</option>
              <option value="2">移动端分类</option>
              <option value="3">JS分类</option>
            </select>
            <div class="tips"></div>
          </div>
        </div>
        <!--<div class="form-group">-->
          <!--<div class="label">-->
            <!--<label>其他属性：</label>-->
          <!--</div>-->
          <!--<div class="field" style="padding-top:8px;"> -->
            <!--首页 <input id="ishome"  type="checkbox" />-->
            <!--推荐 <input id="isvouch"  type="checkbox" />-->
            <!--置顶 <input id="istop"  type="checkbox" />-->
          <!--</div>-->
        <!--</div>--><?php endif; ?>
      <div class="form-group">
        <div class="label">
          <label>描述：</label>
        </div>
        <div class="field">
          <textarea class="input" name="description" style=" height:90px;"><?php echo ($article["description"]); ?></textarea>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>编辑内容：</label>
        </div>
        <textarea name="content" class="common-textarea" id="ueditor" cols="30" style="margin-left:170px;width:600px;height:500px" rows="10"><?php echo ($article["content"]); ?></textarea>
      </div>
     
      <div class="clear"></div>
      <div class="form-group">
        <div class="label">
          <label>排序：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="sortId" value="<?php echo ($article["sortId"]); ?>"  data-validate="number:排序必须为数字" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>发布时间：</label>
        </div>
        <div class="field"> 
          <script src="/personalBlog/Public/admin/js/laydate/laydate.js"></script>
          <input type="text" class="laydate-icon input w50" name="dateline" onclick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})" value="<?php echo ($article["datetime"]); ?>"  data-validate="required:日期不能为空" style="padding:10px!important; height:auto!important;border:1px solid #ddd!important;" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>作者：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="author" value="<?php echo ($article["author"]); ?>"  />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>点击次数：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="clickCount" value="<?php echo ($article["clickCount"]); ?>" data-validate="member:只能为数字"  />
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