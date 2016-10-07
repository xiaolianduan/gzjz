<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
<?php include template("content","header"); ?>

<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>gzjz_css/new.css">
<!-- 主要内容开始-->
<?php include template("content","left"); ?>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>gzjz_css/show4_1.css">
<div class="contend-bottom-right">
    <div class="contend-bottom-title"><?php echo $CATEGORYS[$catid]['catname'];?></div>
    <div class="show4-xuxian">
        <p id="show4-title"><?php echo $title;?></p>
        <p id="show4-time">发布日期：<?php echo $inputtime;?>
            <span>&nbsp;&nbsp;&nbsp;浏览次数:</span><?php echo $copyfrom;?>次</p>
    </div>
    <div class="show-content"><?php echo $content;?></div>
    <div class="up-down">
        <p><strong class="up">上一篇</strong><a href="<?php echo $previous_page['url'];?>">：<?php echo $previous_page['title'];?></a></p>
        <p><strong class="up">下一篇</strong><a href="<?php echo $next_page['url'];?>">：<?php echo $next_page['title'];?></a></p>
    </div>
</div>
</div>
</div>
</div>

<?php include template("content","footer"); ?>