<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
<?php include template("content","header"); ?>

<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>gzjz_css/culture.css">
<?php include template("content","left"); ?>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>gzjz_css/show2_1_1.css">
            <div class="contend-bottom-right">
                <div class="contend-bottom-title"><?php echo $CATEGORYS[$catid]['catname'];?></div>
                <div class="show2-1-imgbig"><img src="<?php echo $thumb;?>" alt=""></div>
                <div class="show2-1-imgmin">
                    <img src="<?php echo $thumb;?>" alt="">
                    <div class="show2-left"></div>
                    <div class="show2-right"></div>
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