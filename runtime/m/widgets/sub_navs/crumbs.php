<ul class="crumbs clearfix mt15 step-<?php echo isset($step)?$step:"";?>">
    <?php $items = array_reverse($items,true);?>
	<?php foreach($items as $key => $item){?>
    <li <?php if($key<$current){?>class="pass"<?php }?>><?php echo ($key+1);?>、<?php echo isset($item)?$item:"";?><em></em><i></i></li>
    <?php }?>
</ul>