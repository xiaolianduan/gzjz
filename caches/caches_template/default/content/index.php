<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<!-- 轮播开始 -->
<script type="text/javascript" src="<?php echo JS_PATH.'gzjz_js/index.js'?>"></script>
<div class="bannerbox">
    <div class="banner">
        <img src="<?php echo IMG_PATH.'gzjz_img/banner01.jpg'?>" class="banner01">
        <img src="<?php echo IMG_PATH.'gzjz_img/banner02.jpg'?>" class="banner02">
        <img src="<?php echo IMG_PATH.'gzjz_img/banner03.jpg'?>" class="banner03">
    </div>
    <ul class="btnbox">
        <li class="btns" style="background:#F06F31"></li>
        <li class="btns"></li>
        <li class="btns"></li>
    </ul>
</div>

<!-- 新闻界面开始 -->
<div class="newsbox">
    <div class="jituanxw">
        <ul class="jituanxw-title">
            <li class="jituanxw-checked">集团要闻</li>
            <li>下属企业动态</li>
            <li>行业资讯</li>
            <li class="more"><a href="<?php echo WEB_PATH;?>index.php?m=content&c=index&a=lists&catid=32" target="_blank"> MORE+</a></li>
        </ul>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=27b2a119ed3c5c7c162c63437ab043f0&action=position&posid=21&order=listorder+DESC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'21','order'=>'listorder DESC','limit'=>'6',));}?>
        <ul class="jituanxw-content">
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li>
                    <a href="<?php echo $r['url'];?>" target="_blank">·<?php echo $r['title'];?>...
                        <span>2016-07-18</span></a></li>
             <?php $n++;}unset($n); ?>
        </ul>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=cde74828ef36c37e5bb8fb1d42a80ab3&action=position&posid=22&order=listorder+DESC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'22','order'=>'listorder DESC','limit'=>'6',));}?>
        <ul class="jituanxw-content">
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li>
                    <a href="<?php echo $r['url'];?>" target="_blank">·<?php echo $r['title'];?>...
                        <span>2016-07-27</span></a></li>
            <?php $n++;}unset($n); ?>
        </ul>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6797da10d53b6f7751fb6267ead125ce&action=position&posid=23&order=listorder+DESC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'23','order'=>'listorder DESC','limit'=>'6',));}?>
        <ul class="jituanxw-content">
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li>
                <a href="<?php echo $r['url'];?>" target="_blank">·<?php echo $r['title'];?>...
                    <span>2016-07-27</span></a></li>
            <?php $n++;}unset($n); ?>
        </ul>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
    <div class="imgxw">
        <ul class="imgxw-title">
            <li>图片新闻</li>
            <li id="more"><a href="<?php echo WEB_PATH;?>index.php?m=content&c=index&a=lists&catid=32"> MORE+</a></li>
        </ul>
        <div class="imgxw-imgs">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fab8e7b3b9e2efebb8df7ee2cf7877d5&action=position&posid=24&order=listorder+DESC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'24','order'=>'listorder DESC','limit'=>'5',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>"></a>
                <?php $n++;}unset($n); ?>
                <div class="imgcover"></div>
                <ul class="imgtitlebox">
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <li><?php echo $r['title'];?></li>
                    <?php $n++;}unset($n); ?>
                </ul>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            <ul class="imgbtnbox">
                <li>5</li>
                <li>4</li>
                <li>3</li>
                <li>2</li>
                <li id="imgbtnat">1</li>
            </ul>
        </div>
    </div>
</div>

<!-- 业理念开始 -->
<div class="ylnbox">
    <div class="yln-left"><a href="<?php echo WEB_PATH;?>index.php?m=content&c=index&a=lists&catid=29" target="_blank"> </a></div>
    <div class="yln-middle"><a href="<?php echo WEB_PATH;?>index.php?m=content&c=index&a=lists&catid=29" target="_blank"> </a></div>
    <div class="yln-right"><a href="<?php echo WEB_PATH;?>index.php?m=content&c=index&a=lists&catid=39" target="_blank"> </a></div>
</div>
<!-- 重点发展方向开始 -->
<div class="zdfzbox">
    <div class="zdfz-left">
        <ul class="zdfz-leftson">
            <li>重点发展方向</li>
            <li class="more"><a href="<?php echo WEB_PATH;?>index.php?m=content&c=index&a=lists&catid=25" target="_blank"> MORE+</a></li>
        </ul>
        <div class="zdfz-left1">
            <div class="zdfz-left-title1">
                <a href="<?php echo WEB_PATH;?>index.php?m=content&c=index&a=lists&catid=46" target="_blank">工程建设与服务</a>
            </div>
            <div class="zdfz-left-contend" style="display:block">
                广州建筑是华南地区首家同时持有<br>房建和市政总承包特级资质的企业<br>集团，并持有总承包一级资质34<br>项，综合实力居广东省建筑业企业<br>之首。
            </div>
        </div>
        <div class="zdfz-left1">
            <div class="zdfz-left-title2">
                <a href="<?php echo WEB_PATH;?>index.php?m=content&c=index&a=lists&catid=48" target="_blank">房地产开发经营者</a>
            </div>
            <div class="zdfz-left-contend">
                广州建筑拥有优质资产及土地资<br>源，近年来先后开发了宜安广场、<br>云山翠苑、华曦大厦、浩蕴大厦、<br>一品湖山、都市品格等优质地产项<br>目，完成建筑面积超过100万平方<br>米```
            </div>

        </div>
        <div class="zdfz-left1">
            <div class="zdfz-left-title2">
                <a href="<?php echo WEB_PATH;?>index.php?m=content&c=index&a=lists&catid=60" target="_blank">新材料研发与经营</a>
            </div>
            <div class="zdfz-left-contend">
                新材料产业是我国战略性新兴产业<br>的重要组成部分、广州重点发展的<br>十大产业之一。广州建筑将新材料<br>研发与经营作为集团巩固提升核心<br>竞争力的重要举措，大力推进环保<br>
                型多功能建筑材料```
            </div>
        </div>
    </div>
    <div class="zdfz-right">
        <div class="zdfz-right-son">
            <div class="zdfz-right-tltle oo1">
                <a href="<?php echo WEB_PATH;?>index.php?m=content&c=index&a=lists&catid=46" target="_blank"></a>
            </div>
            <div class="zdfz-right-contend">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=06a17998e066049b44934cc76a5ee7fb&action=position&posid=25&order=listorder+DESC&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'25','order'=>'listorder DESC','limit'=>'3',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <div class="zdfz-right-bottom">
                        <a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>"></a>
                    </div>
                    <div class="zdfz-right-top">
                        <?php echo $r['title'];?>
                    </div>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
        <div class="zdfz-right-son">
            <div class="zdfz-right-tltle  oo2">
                <a href="<?php echo WEB_PATH;?>index.php?m=content&c=index&a=lists&catid=48"></a>
            </div>
            <div class="zdfz-right-contend">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=bb012a0f2179078c32132525f78001b2&action=position&posid=26&order=listorder+DESC&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'26','order'=>'listorder DESC','limit'=>'3',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <div class="zdfz-right-bottom">
                    <a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>"></a>
                </div>
                <div class="zdfz-right-top">
                    <?php echo $r['title'];?>
                </div>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
        <div class="zdfz-right-son">
            <div class="zdfz-right-tltle  oo3">
                <a href="<?php echo WEB_PATH;?>index.php?m=content&c=index&a=lists&catid=45" target="_blank"></a>
            </div>
            <div class="zdfz-right-contend">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c0ba4ca6c53ced0fb626175748138b49&action=position&posid=27&order=listorder+DESC&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'27','order'=>'listorder DESC','limit'=>'3',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <div class="zdfz-right-bottom">
                    <a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>"></a>
                </div>
                <div class="zdfz-right-top">
                    <?php echo $r['title'];?>
                </div>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
    </div>
</div>

<?php include template("content","footer"); ?>
