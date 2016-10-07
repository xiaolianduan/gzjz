<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
<?php include template("content","header"); ?>

<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>gzjz_css/culture.css">
<style>
    .contend-bottom-left li:first-child a:first-child{
        background:#00A3E6;
        color: white;
    }
    .contend-bottom-left #three{
        display: none;
    }
</style>
<?php include template("content","left"); ?>

<div class="contend-bottom-right">
    <div class="contend-bottom-title"><?php echo $CATEGORYS[$catid]['catname'];?></div>
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fd42999cf2b3e3a29ed22bd4d54348a0&action=lists&catid=%24catid&moreinfo=1&order=listorder+DESC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'moreinfo'=>'1','order'=>'listorder DESC','limit'=>'5',));}?>
    <ul class="yewubox">
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <li class="yewu">
            <div class="yewuimgs">
                <a href="<?php echo $r['url'];?>" ><img src="<?php echo $r['thumb'];?>" alt=""></a>
            </div>
            <div class="yewuson">
                <p class="yewuson-title"><a href="<?php echo $r['url'];?>" class="yewusona" target="_blank"><?php echo $r['title'];?></a></p>
                <p class="yewuson-contend">
                    <?php echo $r['description'];?>...
                </p>
                <p class="yewuson-contend2">
                    承建单位：广州市第四建筑工程有限公司
                </p>
            </div>
        </li>
        <?php $n++;}unset($n); ?>
        <div class="page">
            <span>共86项  |  共9页  |  当前第1页</span>
            <span>上一页</span>
            <span style="background:#dff9f8;border:1px solid #83e7e4;color:#83e7e4">1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>5</span>
            <span>6</span>
            <span>7</span>
            <span>8</span>
            <span>9</span>
            <span>下一页</span>
        </div>
    </ul>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>
</div>
</div>
</div>


<?php include template("content","footer"); ?>