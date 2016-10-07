<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>广州建筑集团有限公司</title>
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH.'gzjz_css/public.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH.'gzjz_css/index.css'?>">
	<script type="text/javascript" src="<?php echo JS_PATH.'gzjz_js/jquery.js'?>"></script>
	<script type="text/javascript" src="<?php echo JS_PATH.'gzjz_js/animate.js'?>"></script>
	<script type="text/javascript" src="<?php echo JS_PATH.'gzjz_js/public.js'?>"></script>
</head>
<body>
<!-- 顶部导航开始 -->
<div class="header">
<div class="topnavbox">
	<div class="topnv-son">
		<div class="searchbox">
			<input type="text" value="请输入关键字"  id="search">
			<a href="">ENGLISH</a>
		</div>
		<ul class="topnav">
			<li class="lis">
				<a href="<?php echo siteurl($siteid);?>" class="lis2">首页</a>
				<dl class="twonav" style="opacity: 0">
				</dl>
			</li>
		<?php $a=9?>
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6caa7ba4ec395355e30b69e4aaea72df&action=category&catid=0&num=25&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','order'=>'listorder ASC','limit'=>'25',));}?>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<li class="lis">
				<a href="<?php echo $r['url'];?>" class= <?php if($r[catid]==$top_parentid) { ?>lis2<?php } ?>><?php echo $r['catname'];?></a>
				<dl class="twonav">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5d47081ba88c06d5c4d4dc0a6e76e439&action=category&catid=%24r%5Bcatid%5D&num=25&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$r[catid],'order'=>'listorder ASC','limit'=>'25',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $d) { ?>
							<dd><a href="<?php echo $d['url'];?>"><?php echo $d['catname'];?></a></dd>
						<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</dl>
				<?php $a++; ?>
			</li>
			<?php $n++;}unset($n); ?>
		<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</ul>
	</div>
</div>
</div>

<!--<?php-->
	 <!--if($child){-->
			<!--$child_arrary=explode(',',$arrchildid);-->
			<!--$to_url=$CATEGORYS[$child_arrary[0]][url];-->
			<!--echo "<script>window.location.href='".$to_url."'</script/>";-->
	 <!--}-->
<!--?>-->