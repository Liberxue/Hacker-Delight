<!doctype html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<title><?php if(isset($seo_title) && isset($site_title) && ($seo_title == $site_title)){?><?php echo isset($seo_title)?$seo_title:"";?><?php }else{?><?php echo isset($seo_title)?$seo_title:"";?>-<?php echo isset($site_title)?$site_title:"";?><?php }?></title>
	<link type="image/x-icon" href="<?php echo urldecode(Url::urlFormat("@favicon.ico"));?>" rel="icon">
	<link type="text/css" rel="stylesheet" href="<?php echo urldecode(Url::urlFormat("#css/common.css"));?>" />
	<link type="text/css" rel="stylesheet" href="<?php echo urldecode(Url::urlFormat("#css/simple.css"));?>" />
	<?php echo JS::import('jquery');?>
	<script type='text/javascript' src="<?php echo urldecode(Url::urlFormat("#js/common.js"));?>"></script>
	<!--[if IE 6]>
		<script src="<?php echo urldecode(Url::urlFormat("#js/DD_belatedPNG-min.js"));?>"></script>
		<script>DD_belatedPNG.fix('.ie6png');</script>
	<![endif]-->
</head>
<body class="screen_960">
	<!--S 头部 -->
	<div id="header" class="clearfix">
		<div class="header-main" style="border-bottom:#7c0000 2px solid;">
			<div class="wrap">
				<div class="logo "><a href="<?php echo urldecode(Url::urlFormat("/index/index"));?>"><img class="ie6png" src="<?php echo urldecode(Url::urlFormat("@$site_logo"));?>" style="max-height:74px;"></a></div>
			</div>
		</div>
	</div>
	<!--E 头部 -->
	<!--S content-->
	<div id="content">
		<div class="wrap">
		<?php if(isset($msg)){?>
		<div class="message-box mt5" >
			<div class="message-head"><div class="message_<?php echo isset($msg[0])?$msg[0]:"";?> ie6png"><?php echo isset($msg[1])?$msg[1]:"";?></div><i class="fail "></i></div>
			<div class="message-content">
			</div>
		</div>
		<?php }?>
			<link type="text/css" rel="stylesheet" href="<?php echo urldecode(Url::urlFormat("#css/simple.css"));?>" />
<?php $items=array("购物车","确认订单信息","选择支付","订购完成");?>
<div id='widget_sub_navs'><?php $widget = Widget::createWidget('sub_navs');$widget->action = "crumbs";$widget->items = $items;$widget->step = "4";$widget->current = "1";$widget->cache = "false";$widget->run();?></div>
<div class="mt20  clearfix">
    <?php if($cart){?>
	<table width="100%" class="simple">
		<tr>
			<th style="width:60px;">商品</th>
			<th style="width:200px;">名称</th>
			<th style="width:160px;">规格</th>
			<th style="width:100px;">单价</th>
			<th style="width:120px;">数量</th>
			<th style="width:100px;">优惠</th>
			<th style="width:80px;">小计</th>
			<th style="width:40px;">操作</th>
		</tr>
		<?php $total=0.00;?>
		<?php foreach($cart as $key => $item){?>
		<?php $total+=$item['amount'];?>
		<tr id="<?php echo isset($item['id'])?$item['id']:"";?>"><td><a href="<?php echo urldecode(Url::urlFormat("/index/product/id/$item[goods_id]"));?>" target="_blank"><img src="<?php echo Common::thumb($item['img'],100,100);?>" width="50" height="50"></a></td><td><a href="<?php echo urldecode(Url::urlFormat("/index/product/id/$item[goods_id]"));?>" target="_blank"><?php echo String::msubstr($item['name'],0,36);?></a></td> <td><?php foreach($item['spec'] as $key => $spec){?>
								<p title="<?php echo isset($spec['name'])?$spec['name']:"";?>:<?php echo isset($spec['value'][2])?$spec['value'][2]:"";?>"><?php echo isset($spec['name'])?$spec['name']:"";?>：<?php echo isset($spec['value'][2])?$spec['value'][2]:"";?></p>
							<?php }?></td> <td><?php echo isset($item['price'])?$item['price']:"";?></td> <td><div  class="buy-num-bar buy-num clearfix"><a class="btn-dec" href="javascript:;">-</a><input  name="buy_num" value="<?php echo isset($item['num'])?$item['num']:"";?>"  maxlength=5><a class="btn-add" href="javascript:;">+</a></div></td> <td class="prom"><?php echo isset($item['prom'])?$item['prom']:"";?></td> <td class="amount red"><?php echo isset($item['amount'])?$item['amount']:"";?></td> <td><a href="#" class="icon-close"></a></td></tr>
		<?php }?>
	</table>
<div class="mb10" style="padding:10px; background: #f0f0f0;"><span class="fr">商品总价(不含运费)：<span style="font-size: 24px;font-family: tahoma"><span class="currency-symbol"><?php echo isset($currency_symbol)?$currency_symbol:"";?></span><b class="cart-total red" ><?php echo sprintf("%01.2f",$total);?></b></span></span></div>
</div>
<div class="mt10 clearfix">
<p class="fr"><a class="btn btn-gray" href="<?php echo urldecode(Url::urlFormat("/index/index"));?>">继续购物</a>&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn" href="<?php echo urldecode(Url::urlFormat("/simple/order"));?>">结算</a></p></div>
<?php }else{?>
<div class="mt20 mb20 p20 box">
    <p class="cart-empty ie6png">购物车内暂时没有商品，<a  href="<?php echo urldecode(Url::urlFormat("/index/index"));?>">去首页</a> 挑选喜欢的商品。</p>
    
</div>
<p class="fr"><a class="btn " href="<?php echo urldecode(Url::urlFormat("/index/index"));?>"> < 继续购物</a></p>
<?php }?>

<script type="text/javascript">
	$(".btn-dec").on("click",function(){
		var parent = $(this).parent().parent();
		var id = parent.parent().attr("id");
        var num = parent.find("input").val();
        if(num>1) num--;
        else num=1;
        if($("#"+id).find("input").val()!=num) changeInfo(id,num);
        parent.find("input").val(num);
    });
    $(".btn-add").on("click",function(){
    	var parent = $(this).parent().parent();
    	var id = parent.parent().attr("id");
        var num = parent.find("input").val();
        num++;
        if($("#"+id).find("input").val()!=num) changeInfo(id,num);
        parent.find("input").val(num);
    });

    $(".buy-num-bar input").on("change",function(){
        var num = parseInt($(this).val());
        var parent = $(this).parent().parent();
        var id = parent.parent().attr("id");
        changeInfo(id,num);
    })
    $(".icon-close").on("click",function(){
    	var parent = $(this).parent();
    	var id = $(this).parent().parent().attr("id");
    	$.post("<?php echo urldecode(Url::urlFormat("/index/cart_del"));?>",{id:id},function(data){
    		if(data['status']=='success')location.reload();
    	},'json');
    })

    function changeInfo(id,num){
    	$.post("<?php echo urldecode(Url::urlFormat("/index/cart_num"));?>",{id:id,num:num},function(data){
    		var total = 0.00;
    		for(var i in data) total += parseFloat(data[i]['amount']);
            $("#"+id).find(".amount").text(data[id]['amount']);
        	$("#"+id).find(".prom").text(data[id]['prom']);
        	if(parseInt($("#"+id).find("input").val())>data[id]['store_nums']){
        		$("#"+id).find("input").val(data[id]['store_nums']);
        		var parent = $("#"+id).find("input").parent().parent();
        		if(parent.find(".msg-simple-error").size()==0)parent.append("<div class='msg-simple-error'>最多购买"+data[id]['store_nums']+"件</div>");
        	}else{
        		$("#"+id).find("input").val(data[id]['num']);
        		$("#"+id).find("input").parent().parent().find(".msg-simple-error").remove();
        	}
        	$(".cart-total").text(total.toFixed(2));
        },"json");
    }
</script>
		</div>
	</div>
	<!--E content-->
	<!--S 底部 -->
	<div class="footer-links">
					<p><a><b>友情连接：</b></a><a href="http://www.cvsyun.com">礼县便利云科技有限公司</a></p>
				</div>
				<div class="copyright">
					<div><?php $item=null; $query = new Query("nav");$query->where = "type = 'bottom'";$query->order = "`sort` desc";$items = $query->find(); foreach($items as $key => $item){?>
					<a href="<?php if(strstr($item['link'],'http://')===false){?><?php echo urldecode(Url::urlFormat("$item[link]"));?><?php }else{?><?php echo isset($item['link'])?$item['link']:"";?><?php }?>" target="<?php if($item['open_type']==1){?>_blank<?php }else{?>_self<?php }?>"><?php echo isset($item['name'])?$item['name']:"";?></a>
					<?php }?></div>
					<!--S 济南泰创软件科技有限公司保留所有版权，非授权用户严禁删除版权信息；擅自删除，后果自负，您的支持是我们成长的动力。-->
					<div><span>Powered by <a href="http://www.cvsyun.com><b style="color: #7c0000">...</b><b style="color: #666">013</b></a></span> © 2014 <a href="http://www.cvsyun.com">cvsyun.com</a> . 保留所有权利 。<?php echo isset($site_icp)?$site_icp:"";?> </div>
					<!--S 济南泰创软件科技有限公司保留所有版权，非授权用户严禁删除版权信息；擅自删除，后果自负，您的支持是我们成长的动力。-->
				</div>
			</div>

	</div>
	<!--E 底部 -->
</body>
</html>