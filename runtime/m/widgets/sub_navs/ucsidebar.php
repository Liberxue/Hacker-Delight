<div class="sidebar fl" style="width:200px;">
<h2 class="header">用户中心</h2>
	<div class="box">
		<?php foreach($sidebar as $key => $item){?>
		<h2><?php echo isset($key)?$key:"";?></h2>
		<ul class="menu-list">
			<?php foreach($item as $key => $v){?>
			<li><a <?php if($act==$v){?>class="current"<?php }?> href="<?php echo urldecode(Url::urlFormat("/ucenter/$v"));?>"><?php echo isset($key)?$key:"";?><span class="l-triangle"></span></a></li>
			<?php }?>
		</ul>
		<?php }?>	
	</div>
</div>