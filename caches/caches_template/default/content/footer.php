<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!-- 友情链接开始 -->
	<div class="footer">
		<div class="linkbox">
			<div class="linkson">
				<select name="" id="">
					<option value="">各级建设机关</option>
					<option value="">建设部</option>
					<option value="">粤建网</option>
					<option value="">广州市国土房管理局</option>
					<option value="">广州建委</option>
					<option value="">广州市规划局</option>
				</select>
				<select name="" id="">
					<option value="">集团下属企业</option>
					<option value="">市政集团</option>
					<option value="">总承包集团</option>
					<option value="">中广国际</option>
					<option value="">一建公司</option>
					<option value="">二建公司</option>
					<option value="">三建公司</option>
					<option value="">四建公司</option>
					<option value="">机施集团</option>
					<option value="">机安公司</option>
					<option value="">建材公司</option>
					<option value="">建科院</option>
					<option value="">铝制公司</option>
					<option value="">恒盛公司</option>
					<option value="">盾建公司</option>
					<option value="">建工设计院</option>
				</select>
				<select name="" id="">
					<option value="">行业网站</option>
					<option value="">筑龙网</option>
					<option value="">广州建筑业联合会</option>
					<option value="">中国施工企业管理协会网</option>
					<option value="">中国建筑业协会</option>
				</select>
				<div class="linkson-right">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1cb7a0098598d5ab0d9aed01226c6fed&action=category&catid=51&num=25&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'51','order'=>'listorder ASC','limit'=>'25',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
							<div class="linkson-right">
								<a href="<?php echo $r['url'];?>" target="_blank"></a>
							</div>
						<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					<div class="linkson-right6"></div>
					<div class="linkson-right7">69</div>
				</div>
			</div>
		</div>
		<!-- 版权开始 -->
		<div class="footbox">
			<p>Copyright(c)2013 广州市建筑集团有限公司 | <a href="<?php echo WEB_PATH;?>index.php?m=content&c=index&a=lists&catid=42">联系我们</a></p>
			<p>
				<img src="images/30.gif" alt="">
				<img src="images/31.png" alt="">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f744c7f62eec3e8b5567412ca3e23fee&action=category&catid=57&num=25&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'57','order'=>'listorder ASC','limit'=>'25',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['catname'];?></a>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</p>
		</div>


		<!-- 固定定位开始 -->
		<div class="fixed">
			<img src="<?php echo IMG_PATH;?>gzjz_img/top1.gif" alt="">
		</div>
	</div>
</body>
</html>
