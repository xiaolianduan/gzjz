<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
<?php include template("content","header"); ?>

<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>gzjz_css/base.css">
<!-- 主要内容开始-->
<?php include template("content","left"); ?>
<style>
    .list-content{
        padding: 15px 0;
        font-family: "宋体";
    }
    .list-content .jjtitle{
        font-size: 20px;
        text-align: center;
        line-height: 30px;
        color: #000;
    }
    .list-content p{
        text-indent: 2em;
        line-height: 25px;
    }
    .list-content span{
        font-weight: normal;
        display:inline-block;
        margin-right:30px;
        font-size: 15px;
        line-height: 30px;
        font-family: "宋体";
        text-align: left;
    }

</style>
            <div class="contend-bottom-right">
                <div class="contend-bottom-title"><?php echo $CATEGORYS[$catid]['catname'];?></div>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fd42999cf2b3e3a29ed22bd4d54348a0&action=lists&catid=%24catid&moreinfo=1&order=listorder+DESC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'moreinfo'=>'1','order'=>'listorder DESC','limit'=>'5',));}?>
                    <div class="list-content">
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <?php echo $r['content'];?>
                        <?php $n++;}unset($n); ?>
                    </div>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include template("content","footer"); ?>