<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
<?php include template("content","header"); ?>

<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>gzjz_css/new.css">
<!-- 主要内容开始-->
<?php include template("content","left"); ?>
<div class="contend-bottom-right">
    <div class="contend-bottom-title"><?php echo $CATEGORYS[$catid]['catname'];?></div>
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=bf665e75c79248ef808294bf87146162&action=hits&catid=%24catid&num=20&order=views+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>$catid,'order'=>'views DESC',)).'bf665e75c79248ef808294bf87146162');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>$catid,'order'=>'views DESC','limit'=>'20',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
    <ul class="yewubox">
        <?php $a=0?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <?php if($a==0) { ?>
            <li class="yewu" style="margin-top:20px">
                <a href="<?php echo $r['url'];?>"  class="tt"><span>2013-07-18</span>&nbsp;·&nbsp;<?php echo $r['title'];?></a>
            </li>
        <?php } ?>
        <?php if($a>0) { ?>
            <li class="yewu">
                <a href="<?php echo $r['url'];?>"  class="tt"><span>2013-07-18</span>&nbsp;·&nbsp;<?php echo $r['title'];?></a>
            </li>
        <?php } ?>
        <?php $a++; ?>
        <?php $n++;}unset($n); ?>
        <div class="page">
            <span>共 289条信息 | 1 / 29</span>
            <span>上一页</span>
            <span style="background:#999999;border:1px solid #cadcdc;color:white" class="page-co">1</span>
            <span class="page-co">2</span>
            <span class="page-co">3</span>
            <span class="page-co">4</span>
            <span class="page-co">5</span>
            <span class="page-co">6</span>
            <span class="page-co">7</span>
            <span class="page-co">8</span>
            <span class="page-co">9</span>
            <span class="page-co">10</span>
            <span>next</span>
            Go: <input type="text" id="page-text">
        </div>
    </ul>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>
</div>
</div>
</div>

<?php include template("content","footer"); ?>