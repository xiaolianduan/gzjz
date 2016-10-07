<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>gzjz_css/left.css">
<div class="contendbox">
    <div class="contend">
        <div class="contend-top">
            <div class="contend-top-left"><?php echo $CATEGORYS[$top_parentid]['catname'];?></div>
            <div class="contend-top-right">
                <span><img src="<?php echo IMG_PATH;?>gzjz_img/dwbz.png"> 当前位置:&nbsp;</span>
                <a href="">&nbsp;首页</a> &gt;
                <a href="">&nbsp;<?php echo $CATEGORYS[$top_parentid]['catname'];?></a>
                <?php if($catid>14) { ?>
                    &gt;&nbsp;
                    <?php echo $CATEGORYS[$catid]['catname'];?>
                <?php } ?>
            </div>
        </div>
        <div class="contend-bottom">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e0e3c99abec8d5a3ffa3430d91f76a14&action=category&catid=%24CATEGORYS%5B%24top_parentid%5D%5Bcatid%5D&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$CATEGORYS[$top_parentid][catid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
            <ul class="contend-bottom-left">
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li id=<?php if($r[catid]==$catid) { ?>checked<?php } ?>><a href="<?php echo $r['url'];?>" class="blue">&nbsp;·&nbsp;<?php echo $r['catname'];?><span >&gt;&gt;</span></a>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2c5796102fc450f9052b61ce2eb23536&action=category&catid=%24r%5Bcatid%5D&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$r[catid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                    <dl id="three">
                        <?php $n=1;if(is_array($data)) foreach($data AS $d) { ?>
                        <dd><a href="<?php echo $d['url'];?>">&nbsp;&nbsp;&nbsp; - <?php echo $d['catname'];?></a>
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=82e56ac579f48cdfc65eecfa0392807c&action=category&catid=%24d%5Bcatid%5D&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$d[catid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                            <p><a href="<?php echo $v['url'];?>" id="<?php if($v[catid]==$catid) { ?>mingreen<?php } ?>"> - <?php echo $v['catname'];?></a></p>
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </dd>
                        <?php $n++;}unset($n); ?>
                    </dl>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </li>
                <?php $n++;}unset($n); ?>
            </ul>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

