<!doctype html>
<html>
    <head>
	<meta charset="UTF-8">
	<title><?php if(isset($seo_title) && isset($site_title) && ($seo_title == $site_title)){?><?php echo isset($seo_title)?$seo_title:"";?><?php }else{?><?php echo isset($seo_title)?$seo_title:"";?>-<?php echo isset($site_title)?$site_title:"";?><?php }?></title>
	<meta name="description" content="<?php echo isset($seo_description)?$seo_description:"";?>">
	<meta name="Keywords" content="<?php echo isset($seo_keywords)?$seo_keywords:"";?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="bookmark" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <meta content="width=device-width, minimum-scale=1,initial-scale=1, maximum-scale=1, user-scalable=1;" id="viewport" name="viewport" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <link type="text/css" rel="stylesheet" href="<?php echo urldecode(Url::urlFormat("#css/com/com.css"));?>"/>
	<link href="<?php echo urldecode(Url::urlFormat("@static/images/favicon.png"));?>" rel="apple-touch-icon-precomposed">
	<link type="image/x-icon" href="<?php echo urldecode(Url::urlFormat("@favicon.ico"));?>" rel="icon">
		<!--E 只引入一次-->
	<script type="text/javascript">
	 var server_url = '<?php echo urldecode(Url::urlFormat("@"));?>__con__/__act__';
	  var Tiny = {user:{name:'<?php echo isset($user['name'])?$user['name']:'';?>',id:'<?php echo isset($user['id'])?$user['id']:0;?>',online:<?php echo isset($user['id']) && $user['id']?'true':'false';?>}};
	</script>
	<?php echo JS::import('jquery');?>
		<script type='text/javascript' src="<?php echo urldecode(Url::urlFormat("#js/common.js"));?>"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo urldecode(Url::urlFormat("#js/jslider.css"));?>" />
    <script type='text/javascript' src="<?php echo urldecode(Url::urlFormat("#js/jslider.js"));?>"></script>
			<script src="<?php echo urldecode(Url::urlFormat("#js/com/com.js"));?>"></script>
<script>
jQuery(function($) {
	$(window).resize(function(){
		var width=$('#js-com-header-area').width();
		$('.touchslider-item a').css('width',width);
		$('.touchslider-viewport').css('height',300*(width/640));
	}).resize();	
	$(".touchslider").touchSlider({mouseTouch: true, autoplay: true});
});
</script>	
	</head>
	        <div class="com-content">
             					<script>
                           
                        function open_notice(id){
                            setCookie('touch_notice_close',1);
                            var url = 'new/info/'+id+'.html';
                            window.location.href=url;
                        }   
                           
                        var touch_notice_close = getCookie('touch_notice_close');
                        if(touch_notice_close == '1' && typeof(document.getElementById('js-com-notification2')) != 'undefined' && document.getElementById('js-com-notification2') != null){
                            document.getElementById('js-com-notification2').style.display = 'none';
                        }
			</script>
	<body>
		<script type="text/javascript">if(screen.width < 1200) { document.getElementsByTagName('body')[0].className = 'screen_960'; }</script>
		<!--S 头部 -->
		     <div class="com-header-area" id="js-com-header-area">
                <a href="default.htm" class="com-header-logo"></a>
				<dfn></dfn>
                <p>
                    <a class="com-header-search" id="js-com-header-search"><del></del></a>
                    <a href="<?php echo urldecode(Url::urlFormat("/simple/login"));?>" class="com-header-user "><del></del></a>
                    <i></i>
                    <a href="cart/default.htm" class="com-header-cart "><b id="header-cart-num">0</b><del></del></a>
                </p>
				<div class="clear"></div>
                <form action="/s.php" method="post">
                    <strong>
                        <input type="text" name="keyword" id="js-com-search-text" value=""/>
                        <input type="submit" value=" "/>
                    </strong>
                    <div id="js-com-search-recommend">
                        <div></div>
                                                <a href="p-_m0003s0017_1.html@asc=id"  style="color:#000000	">女单鞋</a>
                                                <a href="p-m0001_id;1.html"  style="color:#ed1749">运动新品</a>
                                                <a href="p-m0001s0014_1.html"  style="color:#000000">篮球鞋</a>
                         
                    </div>
                </form>
            </div>
				<?php echo JS::import('form');?>
  <div class="com-content-area" id="js-com-content-area">
<!--content-->
 <div class="page-role login-page">
<div class="page-title"><a href="javascript:history.back();void(0)" class="return">返 回</a>登录<a href="<?php echo urldecode(Url::urlFormat("/simple/reg"));?>">注册<i></i></a></div>
<div class="pxui-form-info">
	<form action="<?php echo urldecode(Url::urlFormat("/simple/login_act"));?>" method="post" callback="checkReadme"style="padding-left:15px;"class="pxui-form-info">
		<input type="hidden" name="redirectURL" value="<?php echo isset($redirectURL)?$redirectURL:$this->perPage();?>">
	<p class="error-msg" id="js-error-msg"></p>
			  <div><span>邮&nbsp;&nbsp;&nbsp;&nbsp;箱：</span><p><span><input class="input"  name="email" id="email"  pattern="email" alt="邮箱格式不正确"placeholder="邮箱" type="text" value=""/></span></p></div>	 
		<div><span>密&nbsp;&nbsp;&nbsp;&nbsp;码</span><p><span><input type="password" class="input" name="password" pattern="required" alt="密码不能为空！"></span></p></div>
		<div><span>&nbsp;</span><p><span><input type="submit" class="pxui-light-button" value="登录"></span></p>
		<input name="autologin" id="readme" type="checkbox" value="1"><label>自动登录</label> <label>[<a href="<?php echo urldecode(Url::urlFormat("/simple/forget_password"));?>">忘记密码?</a>]</label></div>
	</form>
</div>
<div class="pxui-form-info">
	<ul>
		<?php if(!empty($oauth_login)){?>
		<h3 style="padding-left:100px;"class="pxui-color-blue">使用小伙伴们的账号登录</h3>
	<div class="pxui-form-info pxui-other-login">
				<dd class="mt15 outh-list"><?php foreach($oauth_login as $key => $item){?>
					<a href="<?php echo isset($item['url'])?$item['url']:"";?>"><img src="<?php echo urldecode(Url::urlFormat("@protected/classes/oauth/logo/$item[icon]"));?>" ><div class="tc"><?php echo isset($key)?$key:"";?></div></a>
					<?php }?>
				</dd>
			</dl>
		</li>
		<?php }?>
	</ul>
	<div class="tc"></div>
</div>
</div>
<script type="text/javascript">
	$("input[name='email']").on("change",function(event){
		if(autoValidate.validate(event)){
			$.post("<?php echo urldecode(Url::urlFormat("/ajax/email/email/"));?>"+$(this).val(),function(data){
				var msg = '合法用户';
				if(data['status']) msg = '用户不存在';
			autoValidate.showMsg({id:document.getElementById('email'),error:data['status'],msg:msg});
		},'json');
		}
	});
	<?php if(isset($invalid)){?>
		var form = new Form();
		form.setValue('email', '<?php echo isset($email)?$email:"";?>');
		autoValidate.showMsg({id:$("input[name='<?php echo isset($invalid['field'])?$invalid['field']:"";?>']").get(0),error:true,msg:"<?php echo isset($invalid['msg'])?$invalid['msg']:"";?>"});
	<?php }?>
</script>

		<!--E content-->
        <!--E 底部 -->
		</div>
                		<div class="com-footer-area" id="js-com-footer-area">
			<div class="com-footer-nav">
				<a href="/">首页</a><a href="<?php echo urldecode(Url::urlFormat("/index/help_index"));?>">帮助中心</a><a href="<?php echo urldecode(Url::urlFormat("/index/help_index"));?>">反馈建议</a>
			</div>
			<div class="com-footer">
				<p class="com-policy">
					<strong>
						<a class="pxui-color-white" href="javascript:void(0)">
							<i></i>
							<span>自营商品<br/>
							满99包邮</span>
						</a>&nbsp;&nbsp;&nbsp;&nbsp;
						<a class="pxui-color-white" href="javascript:void(0)">
							<i style="background-position:-40px -108px;"></i>
							<span>15天无理由<br/>
							免邮退换货</span>
						</a>
					</strong>
				</p>
				<br/>
				<br/>
				<p>
					<strong>
                                            						<a style="color:#769fbf;" href="login/default.htm">登录</a>&nbsp;&nbsp;
						<a style="color:#769fbf;" href="register/default.htm">注册</a>
                                            					</strong>
				</p>
				<br/>
				<p>
					<strong>
						<a href="#">极速版</a>&nbsp;&nbsp;
						<a href="#">触屏版</a>&nbsp;&nbsp;
						<a href="#">客户端</a>
					</strong>
				</p>
					<div> </div>
				<br/>
				<span>Powered by<a href="http://www.cvsyun.com">礼县绝影</a></span>©2015<a href="http://www.cvsyun.com">技术支持</a><br/><?php echo isset($site_icp)?$site_icp:"";?>
                                <br /> 
                                <p style="text-align: left;border-bottom:none;display:table-cell; padding-left: 10px; padding-right: 10px;">友情链接：<a href='http://www.cvsyun.com'>礼县绝影科技 </a>
</p></div></div></div> <div id="shopping-cart" >

			<div id="card-wrap" class="ie6png">
				<div class="clearfix" style="height: 32px;"><a href="<?php echo urldecode(Url::urlFormat("/simple/cart"));?>" class="fr btn btn-gray" style="padding: 2px 6px;font-size: 12px;" target="_blank">查看购物车</a></div>
				<div id="card-list">
					<?php $total=0.00;?>
					<?php foreach($cart as $key => $item){?>
					<?php $total += $item['amount'];?>
					<div class="card-item" id="<?php echo isset($item['id'])?$item['id']:"";?>">
						<div class="pic">
							<a class="card-pic" href="<?php echo urldecode(Url::urlFormat("/index/product/id/$item[goods_id]"));?>" target="_blank" title="<?php echo isset($item['name'])?$item['name']:"";?>"><img src="<?php echo urldecode(Url::urlFormat("@$item[img]"));?>" width="50" height="50"></a></div>
							<div class="spec">
								<?php foreach($item['spec'] as $key => $spec){?>
								<p title="<?php echo isset($spec['name'])?$spec['name']:"";?>:<?php echo isset($spec['value'][2])?$spec['value'][2]:"";?>"><?php echo isset($spec['value'][2])?$spec['value'][2]:"";?></p>
								<?php }?>
							</div>
							<div class="num"><?php echo isset($item['num'])?$item['num']:"";?></div>
							<div class="price" title="<?php echo isset($item['amount'])?$item['amount']:"";?>"><?php echo isset($item['amount'])?$item['amount']:"";?></div>
							<a class="icon-close ie6png" productid="<?php echo isset($item['id'])?$item['id']:"";?>"></a>
						</div>
						<?php }?>
					</div>
				</div>
				<div id="shopping-bar-box" >
					<div id="shopping-bar">
						<div class="fl tl" style="padding-left:8px;" > <i class="icon-cart ie6png" style="zoom:1;"></i><span class="zoom:1;">购物车(<b class="cart-product-num"><?php echo count($cart);?></b>)</span></div> 
						<span class="fr tr">
							<div style="padding-right:12px;"><span class="currency-symbol"><?php echo isset($currency_symbol)?$currency_symbol:"";?></span><b class="cart-total"><?php echo  sprintf("%01.2f",$total);?></b></div>
						</span>
					</div>
					<a id="settlement" href="<?php echo urldecode(Url::urlFormat("/simple/cart"));?>">去结算</a>
				</div>
			</div>		<!--S 购物车 -->
			<script type="text/javascript">
				$("#shopping-cart").on("mouseenter",function(){
					if($("#card-wrap").position().top>-15)$("#card-wrap").animate({top:"-15px"},100);
				});
				$("#shopping-cart").on("mouseleave",function(){
					if($("#card-wrap").position().top==-15)$("#card-wrap").animate({top:"-5px"},"fast");
				});
				$(document).on("click",function(e){
					$("#card-wrap").animate({top:"-5px"},"fast");
				})
				$("#shopping-cart").on("click",function(e){
					if (e.stopPropagation) {e.stopPropagation();}     
					e.cancelBubble = true;
				});
				$("#shopping-bar").on("click",function(e){
			//for(i in e)alert(i+'==='+e[i]);
			var currentNode = e.currentTarget;
			//alert(currentNode.id);
			//if (e.stopPropagation) {e.stopPropagation();}     
			//e.cancelBubble = true;
			if($("#card-wrap").outerHeight()>360)$("#card-wrap").css("height","360px");
			if($("#card-wrap").position().top>=-15)$("#card-wrap").animate({top:1-$("#card-wrap").outerHeight()},"fast");
			else{
				$("#card-wrap").animate({top:"-5px"},100);
			}
			return false;
		});

				function updateCart(data){
					var card_items = '';
					for(var i in data){
						var spec = data[i]['spec'];
						var spec_str = '';
						for(var k in spec){
							spec_str +="<p>"+spec[k]['value'][2]+"</p>";
						}
						card_items += '<div class="card-item" id="'+i+'"><div class="pic"><img src="<?php echo urldecode(Url::urlFormat("@"));?>'+data[i]['img']+'" width="50" height="50"></div><div class="spec">'+spec_str+'</div><div class="num">'+data[i]['num']+'</div><div class="price">'+(data[i]['amount'])+'</div><a class="icon-close ie6png" productid="'+data[i]['id']+'"></a></div>';
					}
					$("#card-list").empty().append(card_items);
					changeCartInfo();
					bindDelEvent();
				}
				bindDelEvent();
				function bindDelEvent(){
					$("#shopping-cart .icon-close").on("click",function(){
						var btn_close = $(this);
						$.post("<?php echo urldecode(Url::urlFormat("/index/cart_del"));?>",{id:btn_close.attr("productid")},function(){
							btn_close.parent().remove();
							changeCartInfo();
							$("#card-wrap").css({top:1-$("#card-wrap").outerHeight()},"fast");
						},"json");
					});
				}

				function changeCartInfo(){
					$(".cart-product-num").text($(".card-item").size());
					var total = 0.00;
					$(".card-item .price").each(function(){
						total += parseFloat($(this).text());
					});
					$(".cart-total").text(total.toFixed(2));
				}
				$("#tags-list a").each(function(){
					$(this).on("click",function(){
						$("#search-keyword").val($(this).text());
						$("#search-form").submit();
					})
				})
        //导航高亮
        $(".header-nav .nav li").has("a[href='<?php echo isset($url_index)?$url_index:"";?>']").addClass("current");
        //
        $(".header-cart dl,.category,.category .group dl").hover(
        	function () {
        		$(this).addClass("hover");
        	},
        	function () {
        		$(this).removeClass("hover");
        	}
        	);
        </script>
        <!--E 购物车 --></body></html>