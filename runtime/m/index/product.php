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
				<?php echo JS::import('dialog?skin=simple');?>
<?php echo JS::import('dialogtools');?>
<?php echo JS::import('form');?>
<!--S 产品展示-->
<script type='text/javascript' src="<?php echo urldecode(Url::urlFormat("#js/jquery.enlarge.js"));?>"></script>
    <link type="text/css" rel="stylesheet" href="<?php echo urldecode(Url::urlFormat("#css/good/index.css"));?>" />
        <script src="<?php echo urldecode(Url::urlFormat("#js/com/template.js"));?>"></script>
	<script src="<?php echo urldecode(Url::urlFormat("#js/com/jquery.touchslider.min.js"));?>"></script>
<script type="text/javascript">
	//$("body").addClass("screen_960");
</script>
     <div class="com-content-area" id="js-com-content-area">
                <!--content-->
 <div class="page-role good-page">
				<script>
jQuery(function($) {
	$(".touchslider").touchSlider({mouseTouch: true, autoplay: true});
});
</script>
    <div class="page-title"><a class="return" href="javascript:history.back();void(0)">返 回</a>商品详情</div>
    <div class="pxui-area"> <h1><?php echo isset($goods['name'])?$goods['name']:"";?></h1>
<div class="touchslider ">
			<div id="imgmini"class="touchslider-viewport" style="height:280px;overflow:hidden"><div>
    		<?php foreach(unserialize($goods['imgs']) as $key => $img){?>
           <div  class="touchslider-item"><a><span class="img320"><dfn></dfn><img src="<?php echo Common::thumb($img,367);?>"  source="<?php echo urldecode(Url::urlFormat("@$img"));?>">
      </span></a></div>	<?php }?>
							</div></div>
				<div class="touchslider-navtag">
				<a class="touchslider-prev"></a>
								<span class="touchslider-nav-item touchslider-nav-item-current"></span>
                               
								<span class="touchslider-nav-item "></span>
                               
								<span class="touchslider-nav-item "></span>
                               
								<span class="touchslider-nav-item "></span>
                               
								<span class="touchslider-nav-item "></span>
                               
								<span class="touchslider-nav-item "></span>
                               
								<span class="touchslider-nav-item "></span>
                               
								<a class="touchslider-next"></a>
			</div>
		</div>		
     <ul class="goodinfo" id="js-goodinfo">
	         <li> <b name="detail_mao" id="detail_mao">销 售 价:</b><div><p><strong class="pxui-color-red"><?php echo isset($currency_symbol)?$currency_symbol:"";?><?php echo isset($goods['sell_price'])?$goods['sell_price']:"";?></strong> &nbsp;&nbsp;&nbsp;&nbsp;<del class="pxui-color-gray"><?php echo isset($currency_symbol)?$currency_symbol:"";?><?php echo isset($goods['market_price'])?$goods['market_price']:"";?></del></p></div> </li>
        <ul class=" prom">
        <?php if(!empty($prom)){?>
        <?php if(isset($user['group_id'])){?>
                <?php $group_id = ','.$user['group_id'].',';?>
            <?php }?>
        <li class="product-price"><label>促销价：</label><span id="prom_price" class="price" formula="<?php echo isset($prom['parse']['minus'])?$prom['parse']['minus']:"";?>"><?php echo isset($currency_symbol)?$currency_symbol:"";?> <?php echo isset($prom['parse']['real_price'])?$prom['parse']['real_price']:"";?></span><em class="promo-type">
        <?php echo isset($prom['name'])?$prom['name']:"";?><?php if($prom['parse']['note']!=''){?>【<?php echo isset($prom['parse']['note'])?$prom['parse']['note']:"";?>】<?php }?></em>
        <?php if(isset($group_id)){?>
                <?php if(stripos(','.$prom['group'].',',$group_id)===false){?>
                    你的会员级别，无法享受此活动。
                <?php }?>
            <?php }else{?>
                登录后查看是否享受此活动。
            <?php }?>v>
        </li>
        <?php }else{?>               
  
        <?php }?>
        <?php if($goods['store_nums']>0){?>
        <?php }else{?>
        <li class="clearfix"><label><b class="f16">无货</b></label><span>此商品暂时售完</span>  <span class="btn btn-gray btn-mini" id="goods-notify">到货通知</span></li>
        <?php }?>
        <li class="clearfix" style="height:24px; line-height:24px;">商品评价:<span class="score fl ie6png"><i style="width:<?php echo isset($comment['a']['percent'])?$comment['a']['percent']:"";?>%"></i></span><span>[ 共有(<?php echo isset($comment['total'])?$comment['total']:"";?>)人参与评价 ]</span></li>
    </ul> </ul>
    <div class="spec-info mt10">
        <?php foreach(unserialize($goods['specs']) as $key => $spec){?>
        <dl class="spec-item clearfix">
            <dt><?php echo isset($spec['name'])?$spec['name']:"";?>：</dt>
            <dd>
                <ul class="spec-values" spec_id="<?php echo isset($spec['id'])?$spec['id']:"";?>">
                <?php foreach($spec['value'] as $key => $value){?>
                <li data-value="<?php echo isset($spec['id'])?$spec['id']:"";?>:<?php echo isset($value['id'])?$value['id']:"";?>"><?php if($value['img']==''){?><span><?php echo isset($value['name'])?$value['name']:"";?></span><?php }else{?><img src="<?php echo Common::thumb($value['img'],100);?>"  width="36" height="36"><label><?php echo isset($value['name'])?$value['name']:"";?></label><?php }?><i></i></li>
                <?php }?>
                </ul>
            </dd>
        </dl>
        <?php }?>
	      <li> <div>
            <p class="buy-num" id="buy-num-bar"><a href="javascript:;">-</a><input id="buy-num" name="buy_num" value="1"  maxlength=5><a href="javascript:;">+</a>&nbsp;&nbsp;&nbsp;&nbsp;<span class="vm">可购数量：<b id="store_nums" class="red"><?php echo isset($goods['store_nums'])?$goods['store_nums']:"";?></p></span> </div>
        </li>
        <dl id="spec-msg" class="spec-item clearfix" style="display: none;">
            <dt></dt>
            <dd ><p class="msg"><i class="icon icon-alert"></i><span >请选择您要购买的商品规格</span></p>
            </dd>
        </dl></div>
        <dl class="spec-item clearfix">
            <dt></dt>
            <dd>
                <a href="javascript:;" id="add-cart" class="pxui-light-button addtocart" style="padding:6px 20px;"><i class="icon-cart ie6png"></i> 加入购物车</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="javascript:;" id="attention" class="pxui-light-button addtocar"><i class="icon-plus-1 ie6png"></i>关注</a>
            </dd>
        </dl>
<!--S 商品详情-->
 <a class="pxui-gray-button" id="js-show-size">点击查看&nbsp;&nbsp;<i class="arrow-right"></i></a>
                <h3>同类其它产品</h3>
		<div class="pxui-area">
				<div class="pxui-shoes">
			<div id="js-goodlist">
                <?php $path_like = "like '$goods[path]%'";?>
                <?php $item=null; $query = new Query("goods");$query->where = "category_id in (select id from tiny_goods_category where path $path_like)";$query->order = "sort desc";$query->limit = "10";$items = $query->find(); foreach($items as $key => $item){?>
                <?php if($goods['id']!=$item['id']){?>
       <a href="<?php echo urldecode(Url::urlFormat("/index/product/id/$item[id]"));?>"><div class="img160"><dfn></dfn><img src="<?php echo Common::thumb($item['img'],220,220);?>" width=220></div> <span class="name"><?php echo isset($item['name'])?$item['name']:"";?></span>
                        <span class="price">售价：<b class="red"><?php echo isset($currency_symbol)?$currency_symbol:"";?><?php echo isset($item['sell_price'])?$item['sell_price']:"";?></b></span>
						<del class="price">市<s><?php echo isset($currency_symbol)?$currency_symbol:"";?><?php echo isset($item['market_price'])?$item['market_price']:"";?></s></del>
						  
                <?php }?>
                <?php }?> </a>
        </div>
    </div></div>
    <div class="content" style="margin-left: 12px;">
        <!--S 捆绑销售 -->
        <?php $query = new Query("bundling");$query->where = "CONCAT(',',goods_id,',') like '%,$goods[id],%' and status = 1";$bundling = $query->find();?>
        <?php if($bundling){?>
        <div class="tab ">
        <h1 class="f18">套装组合：</h1>
                <ul class="tab-head">
                <?php foreach($bundling as $key => $item){?>
                    <li>套装<?php echo ($key+1);?></li>
                <?php }?>
                </ul>
                <div class="tab-body bundling-list " style="min-height: 180px;">
                    <?php foreach($bundling as $key => $bun){?>
                    <?php $gids = $goods['id'].','.$bun['goods_id'];$total_price=0.00;?>
                    <div class="group-item">
                        <?php $item=null; $query = new Query("goods");$query->where = "id in($gids)";$query->order = "field(`id`,$gids)";$items = $query->find(); foreach($items as $key => $item){?>
                        <?php $total_price+=$item['sell_price'];?>
                        <div class="goods-item">
                            <?php if($key!=0){?><s class="icon-add ie6png"></s><?php }?>
                            <div><a href="<?php echo urldecode(Url::urlFormat("/index/product/id/$item[id]"));?>"><img src="<?php echo Common::thumb($item['img'],100,100);?>"  width="100" height="100"></a></div>
                            <div style="overflow:hidden;height:36px;"><?php echo isset($item['name'])?$item['name']:"";?></div>
                        </div>
                        <?php }?>
                        <div class="goods-item" style="width:200px;padding-left:20px">
                            <s class="icon-equal"></s>
                            <div class="title"><b><?php echo isset($bun['title'])?$bun['title']:"";?></b></div>
                            <div>套&nbsp;&nbsp;装&nbsp;&nbsp;价： <?php echo isset($currency_symbol)?$currency_symbol:"";?><?php echo isset($bun['price'])?$bun['price']:"";?></div>
                            <div>原　　价： <del><?php echo isset($currency_symbol)?$currency_symbol:"";?><?php echo isset($total_price)?$total_price:"";?></del></div>
                            <div>立即节省： <?php echo isset($currency_symbol)?$currency_symbol:"";?><?php echo $total_price-$bun['price'];?></div>
                            <div class="mt10"><a href="<?php echo urldecode(Url::urlFormat("/index/bundbuy/id/$bun[id]"));?>" class="btn btn-mini">购买套装</a></div>
                        </div>
                    </div>
                    <?php }?>
                </div>
        </div>
        <?php }?>
        <!--S 捆绑销售 -->
       <div class="pxui-tab" style="margin-bottom:10px;">
                <a href="#clearfix"class="selected">商品详情</a>
                <a href="#123">商品评价</a>
                <a href="#123">商品咨询</a>
                <a href="#123">售后服务</a>
            </ul>
            <div class="tab-body" style="min-height: 200px;">
                <!--S 商品详情-->
               <div class="p10 clearfix">
                    <div class="">
                        <ul class="attr-list ">
                            <li>商品名称：<?php echo isset($goods['name'])?$goods['name']:"";?></li>
                            <li>商品编号：<?php echo isset($goods['pro_no'])?$goods['pro_no']:"";?></li>
                            <li>商品重量：<?php echo isset($goods['weight'])?$goods['weight']:"";?>g</li>
                            <li>上架时间：<?php echo isset($goods['create_time'])?$goods['create_time']:"";?></li>
                            <?php foreach($goods_attrs as $key => $item){?>
                            <li><?php echo isset($item['name'])?$item['name']:"";?>：<?php echo isset($item['vname'])?$item['vname']:"";?></li>
                            <?php }?>
                        </ul>
                    </div>
                    <div id="clearfix"class="pxui-area" >
                    <?php echo isset($goods['content'])?$goods['content']:"";?>
                    </div>
                </div>
                <!--E 商品详情-->
                <!--S 商品评价-->
                <div style="padding: 20px;" class="comment-list">
                    <div class="comment-top clearfix">
                        <ul>
                            <li>
                                <div class="tc comment-score"><em class="tc circle "><?php echo isset($comment['a']['percent'])?$comment['a']['percent']:"";?><i style="font-size: 18px;">%</i></em>- 好评度 -</div>
                                <div class="mt10 score ie6png"><i style="width:<?php echo isset($comment['a']['percent'])?$comment['a']['percent']:"";?>%"></i></div>
                            </li>
                            <li class="comment-grade">
                                <div>
                                    <h1>共有(<?php echo isset($comment['total'])?$comment['total']:"";?>)人参考评价</h1>
                                    <dl class="comment-percent">
                                        <dt>很好</dt>
                                        <dd class="bar"><i style="width:<?php echo isset($comment['a']['percent'])?$comment['a']['percent']:"";?>%"></i></dd>
                                        <dd class="percent"><?php echo isset($comment['a']['percent'])?$comment['a']['percent']:"";?>%</dd>
                                        <dt>较好</dt>
                                        <dd class="bar"><i style="width:<?php echo isset($comment['b']['percent'])?$comment['b']['percent']:"";?>%"></i></dd>
                                        <dd class="percent"><?php echo isset($comment['b']['percent'])?$comment['b']['percent']:"";?>%</dd>
                                        <dt>一般</dt>
                                        <dd class="bar"><i style="width:<?php echo isset($comment['c']['percent'])?$comment['c']['percent']:"";?>%"></i></dd>
                                        <dd class="percent"><?php echo isset($comment['c']['percent'])?$comment['c']['percent']:"";?>%</dd>
                                    </dl>
                                </div>
                            </li>
                            <li class="comment-action">
                                <div>
                                    <?php $uid = isset($user['id'])?$user['id']:0;?>
                                    <?php $query = new Query("review");$query->where = "goods_id = $id and user_id = $uid and status = 0";$query->limit = "1";$items = $query->find();?>
                                    <?php if($items){?>
                                    <?php foreach($items as $key => $item){?>
                                    <a href="<?php echo urldecode(Url::urlFormat("/index/review/id/$item[id]"));?>" class="btn">我要评论</a>
                                    <?php }?>
                                    <?php }else{?>
                                    <a href="javascript:;" class="btn btn-disable">我要评论</a>
                                    <?php }?>
                                    <p>仅对购买过该商品的用户开放！</p>

                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="comment tab" id="comment">
                        <ul class="tab-head">
                            <li>全部(<?php echo isset($comment['total'])?$comment['total']:"";?>)</li>
                            <li>很好(<?php echo isset($comment['a']['num'])?$comment['a']['num']:"";?>)</li>
                            <li>较好(<?php echo isset($comment['b']['num'])?$comment['b']['num']:"";?>)</li>
                            <li>一般(<?php echo isset($comment['c']['num'])?$comment['c']['num']:"";?>)</li>
                        </ul>
                        <div class="tab-body">
                            <div id="comment-all">
                                <div class="page-nav"></div>
                                <div class="page-content">
                                    <div class="comment-item">
                                        <div class="consult-q">
                                            <div class="head">
                                                <img src="{head_pic}" width="80" height="80">
                                                <strong cla>{uname}</strong>
                                                <i class="arrow"><b></b></i>
                                            </div>
                                            <div class="comment-content">
                                                <p class="top"><span class="score "><i style="width:{point}%"></i></span><span class="fr">{comment_time|今天}</span></p>
                                                <p >{content}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-nav"></div>
                            </div>

                            <div id="comment-a">
                                <div class="page-nav"></div>
                                <div class="page-content">
                                    <div class="comment-item">
                                        <div class="consult-q">
                                            <div class="head">
                                                <img src="{head_pic}" width="80" height="80">
                                                <strong>{uname}</strong>
                                                <i class="arrow"><b></b></i>
                                            </div>
                                            <div class="comment-content">
                                                <p class="top"><span class="score "><i style="width:{point}%"></i></span><span class="fr">{comment_time|今天}</span></p>
                                                <p >{content}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-nav"></div>
                            </div>

                            <div id="comment-b">
                                <div class="page-nav"></div>
                                <div class="page-content">
                                    <div class="comment-item">
                                        <div class="consult-q">
                                            <div class="head">
                                                <img src="{head_pic}" width="80" height="80">
                                                <strong>{uname}</strong>
                                                <i class="arrow"><b></b></i>
                                            </div>
                                            <div class="comment-content">
                                                <p class="top"><span class="score "><i style="width:{point}%"></i></span><span class="fr">{comment_time|今天}</span></p>
                                                <p >{content}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-nav"></div>
                            </div>

                            <div id="comment-c">
                                <div class="page-nav"></div>
                                <div class="page-content">
                                    <div class="comment-item">
                                        <div class="consult-q">
                                            <div class="head">
                                                <img src="{head_pic}" width="80" height="80">
                                                <strong>{uname}</strong>
                                                <i class="arrow"><b></b></i>
                                            </div>
                                            <div class="comment-content">
                                                <p class="top"><span class="score "><i style="width:{point}%"></i></span><span class="fr">{comment_time|今天}</span></p>
                                                <p >{content}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-nav"></div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!--E 商品评价-->
                <!--S 商品咨询-->
                <div class="consult clearfix" id="goods-consult">
                    <form  style="overflow:hidden;width:100%">
                    <div class="box" style="margin:20px;">
                        <h2>商品咨询：</h2>
                        <div class="p15">
                            <div class="txt-panel mb5">
                                <textarea name="content" id="consult-content"  class="p5 "></textarea>
                            </div>
                            <div class="clearfix"><span class="fl"><input type="text" class="input" name="verifyCode" id="verifyCode" style="width: 80px;" ><img id="captcha_img"  src="<?php echo urldecode(Url::urlFormat("/simple/captcha/h/40/w/120"));?>"><label><a href="javascript:void(0)" class="red" onclick="document.getElementById('captcha_img').src='<?php echo urldecode(Url::urlFormat("/simple/captcha/h/40/w/120/random/"));?>'+Math.random()" id="change-img">换一张</a></label></span>
                            <span class="fr">
                                <input type="submit" id="consult" value="咨询" class="btn"> <input type="reset" value="取消" class="btn btn-gray">
                            </span></div>
                        </div>

                    </div>
                    </form>
                    <div class="page-nav"></div>
                    <div  class="page-content" id="page-content">
                    <div class="consult-item">
                        <div class="consult-q">
                            <div class="head">
                                <img  src="{head_pic}" style="width:80px;height:80px;">
                                <strong>{uname|网友}</strong>
                                <i class="arrow"><b></b></i>
                            </div>
                            <div class="consult-content">{question}
                                <p class="tr">{ask_time}</p>
                            </div>
                        </div>
                        <div class="consult-a {content||hidden}" >
                            <div class="head">
                                <img src="<?php echo urldecode(Url::urlFormat("#images/no-img.png"));?>" width="80" height="80">
                                <strong>商城客服</strong>
                                <i class="arrow"><b></b></i>
                            </div>
                            <div class="consult-content">{content}
                                <p class="tl">{reply_time|今天}</p>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="page-nav"></div>
                </div>
                <!--E 商品咨询-->
                <!--S 售后保障-->
                <div class="clearfix p20">
                    <?php if($goods['sale_protection']){?>
                    <div class="mb20">
                        <?php echo isset($goods['sale_protection'])?$goods['sale_protection']:"";?>
                    </div>
                    <?php }?>
                    <div >
                        <?php echo isset($sale_protection)?$sale_protection:"";?>
                    </div>
                </div>
                <!--E 售后保障-->
            </div>
        </div>
    </div>
</div>
<!--E 商品详情--><a href="#">返回顶部<i class="arrow2-top"></i></a>
<div  id="notify-dialog" class="hidden">
<form id="notify_form"  method="post"  callback="submit_notify">
<h1>订阅到货通知：</h1>
    <table class="form" style="width:400px;">
        <tr>
            <td class="label"><b class="red">*</b> 邮箱地址：</td>
            <td> <input type="text" id="n_email" name="email" pattern="email" ></td>
        </tr>
        <tr>
            <td class="label">手机号码：</td>
            <td><input type="text" id="n_mobile" empty name="mobile"   pattern="mobi"></td>
        </tr>
        <tr>
            <td colspan="2" class="tc"><input type="submit" class="btn" value="到货通知"></td>
        </tr>
    </table>
    </form>
</div>
<script type="text/javascript">
$("#goods-consult").Paging({
                url:'<?php echo urldecode(Url::urlFormat("/index/get_ask"));?>',
                params:{id:<?php echo isset($goods['id'])?$goods['id']:"";?>}
            });
$("#comment-all").Paging({
                url:'<?php echo urldecode(Url::urlFormat("/index/get_review"));?>',
                params:{id:<?php echo isset($goods['id'])?$goods['id']:"";?>}
            });
$("#comment-a").Paging({
                url:'<?php echo urldecode(Url::urlFormat("/index/get_review"));?>',
                params:{id:<?php echo isset($goods['id'])?$goods['id']:"";?>,score:'a'}
            });
$("#comment-b").Paging({
                url:'<?php echo urldecode(Url::urlFormat("/index/get_review"));?>',
                params:{id:<?php echo isset($goods['id'])?$goods['id']:"";?>,score:'b'}
            });
$("#comment-c").Paging({
                url:'<?php echo urldecode(Url::urlFormat("/index/get_review"));?>',
                params:{id:<?php echo isset($goods['id'])?$goods['id']:"";?>,score:'c'}
            });

$("#consult").on("click",function(){
    var content = $("#consult-content").val();
    var verifyCode = $("#verifyCode").val();
    if(!Tiny.user.online)art.dialog.alert('登录后确认才能咨询！');
    else if(content=='')art.dialog.alert("内容不能为空！");
    else if(verifyCode=='')art.dialog.alert("验证码不能为空！");
    else{
        $.post("<?php echo urldecode(Url::urlFormat("/index/goods_consult"));?>",{id:'<?php echo isset($goods['id'])?$goods['id']:"";?>',content:content,verifyCode:verifyCode},function(data){
                if(data['status']=='success'){
                    $("#goods-consult").Paging({
                    url:'<?php echo urldecode(Url::urlFormat("/index/get_ask"));?>',
                    params:{id:<?php echo isset($goods['id'])?$goods['id']:"";?>}
                });
                    $("#consult-content").val('');
                    $("#verifyCode").val('');
                    FireEvent(document.getElementById('change-img'),"click");
                    art.dialog.tips("<p class='success'>发布成功!</p>");
            }else{
                art.dialog.alert("<p class='fail'>"+data['msg']+"</p>");
            }
        },'json')
    }
    
    return false;
})

	$("#imgmini").enlarge({
        // 鼠标遮罩层样式
        shadecolor: "#FFF",
        shadeborder: "#FF8000",
        shadeopacity: 0.5,
        cursor: "move",

        // 大图外层样式
        layerwidth: 367,
        layerheight: 367,
        layerborder: "#DDD",
        fade: true});
    var skuMap = <?php echo JSON::encode($skumap);?>;
    //更新库存信息
    var store_nums = 0;
    for(i in skuMap){
        store_nums += parseInt(skuMap[i]['store_nums']);
    }
    $("#store_nums").text(store_nums);
    $("#goods_nums").text(store_nums);

    $("#gallery  .small-img").each(function(i){
        if(i==0)$(this).addClass("current");
    	$(this).on("mouseenter",function(){
            $(this).parent().find("a").removeClass("current");
            $(this).addClass("current");
            $("#imgmini img").attr("src",$(this).find("img").attr("src"));
            $("#imgmini img").attr("source",$(this).find("img").attr("source"));
    	})
    });
    $(".spec-values li").each(function(){
        $(this).on("click",function(){
            var disabled = $(this).hasClass('disabled');
            if(disabled) return;
            var flage = $(this).hasClass('selected');
            
            $(this).parent().find("li").removeClass("selected");
            if(!flage){
                $(this).addClass("selected");
            }
            changeStatus();
             if($(".spec-values").length == $(".spec-values .selected").length){
                var sku = new Array();
                $(".spec-values .selected").each(function(i){
                    sku[i]= $(this).attr("data-value");
                })
                var sku_key = ";"+sku.join(";")+";";
                if(skuMap[sku_key]!=undefined){
                    var sku = skuMap[sku_key];
                    $("#sell_price").text("<?php echo isset($currency_symbol)?$currency_symbol:"";?>"+sku['sell_price']);
                    $("#store_nums").text(sku['store_nums']);
                    $("#goods_nums").text(sku['store_nums']);
                    if($("#prom_price").size()>0){
                        var formula = $("#prom_price").attr('formula');
                        var prom_price = eval(sku['sell_price']+formula);
                        if(prom_price<=0)prom_price = 0;
                        $("#prom_price").text("<?php echo isset($currency_symbol)?$currency_symbol:"";?> "+prom_price.toFixed(2));
                    }
                    
                    $("#market-price").text(sku['market_price']);
                    $("#pro-no").text(sku['pro_no']);
                }
                $("#spec-msg").css("display","none");
             }
        })
    })
    function changeStatus(){
        var specs_array = new Array();
        $(".spec-values").each(function(i){
            var selected = $(this).find(".selected");
            if(selected.length>0)specs_array[i]=selected.attr("data-value");
            else specs_array[i] = "\\\d+:\\\d+";
        });
        $(".spec-values").each(function(i){
            var selected = $(this).find(".selected");
            $(this).find("li").removeClass("disabled");
            var k = i;
            $(this).find("li").each(function(){
                
                var temp = specs_array.slice();
                temp[k] = $(this).attr('data-value');
                var flage = false;
                for(sku in skuMap){
                    var reg = new RegExp(';'+temp.join(";")+';');
                    if(reg.test(sku) && skuMap[sku]['store_nums']>0) flage = true;
                }
                if(!flage)$(this).addClass("disabled");
            })

        });
    }
    $("#buy-num-bar a:eq(0)").on("click",function(){
        var num = $("#buy-num-bar input").val();
        if(num>1) num--;
        else num=1;
        $("#buy-num-bar input").val(num);
    });
    $("#buy-num-bar a:eq(1)").on("click",function(){
        var num = $("#buy-num-bar input").val();
        var max = parseInt($("#store_nums").text());
        if(num<max) num++;
        else num=max;
        $("#buy-num-bar input").val(num);
    });
    $("#buy-num-bar input").on("change",function(){
        var value = $(this).val();
        var max = parseInt($("#store_nums").text());
        if((/^\d+$/i).test(value)){
            value = Math.abs(parseInt(value));
            if(value<1) value = 1;
            if(value>max) value = max;
        }else{
            value = 1;
        }
        $(this).val(value);
    })
    $("#buy-now").on("click",function(){
        if($(".spec-values").length == $(".spec-values .selected").length){

            $(".spec-values .selected").each(function(){

            })

        }else{
            $("#spec-msg").css("display","");
        }
    })
    //添加到购物车
    $("#add-cart").on("click",function(){
        var product = currentProduct();
        if(product){
            var id = product["id"];
            var num = parseInt($("#buy-num").val());
            var max = parseInt($("#store_nums").text());
            var cart_num = parseInt($("#"+id).find(".num").text());
            if((num+cart_num)>max){
                $("#spec-msg").css("display","");
                showMsgBar('stop',"连同购物车里的商品数量，超出了允许购买的最大量！");
                return false;
            }else if(max<=0){
                $("#spec-msg").css("display","");
                showMsgBar('stop',"库存不足！");
                return false;
            }
            else{
                $("#spec-msg").css("display","none");
            }
            $.post("<?php echo urldecode(Url::urlFormat("/index/cart_add"));?>",{id:id,num:num},function(data){
                updateCart(data);

                var tmp=$($("#imgmini img").get(0).cloneNode(true));
                tmp.css({position: 'absolute','z-index':'9998', border:'solid 1px #ccc', background:'#aaf','overflow':'hidden' ,background:'#fff'});
                var imgView=$("#imgmini").offset();
                tmp.css(imgView);
                tmp.appendTo($('body'));
                var end = $("#shopping-cart").offset();
                step1 = {top:end.top-160,left:end.left+100,width:100,height:100,opacity:0.8};
                step2 = {top:end.top,left:end.left+100,width:100,height:100,opacity:0};

                $(tmp).animate(step1,"slow",function(){$("#card-wrap").animate({top:-15}).animate({top:-5});}).animate(step2, "slow",function(){
                        tmp.remove();  
                      });
            },"json");
        }else{
            $("#spec-msg").css("display","");
            showMsgBar('alert',"请选择您要购买的商品规格！");
        }
    });
    
    //取得当前商品
    function currentProduct(){
        if($(".spec-values").length==0){
            return skuMap[''];
        }
        if($(".spec-values").length == $(".spec-values .selected").not(".disabled").length){
            var sku = new Array();
            $(".spec-values .selected").each(function(i){
                sku[i]= $(this).attr("data-value");
            })
            var sku_key = ";"+sku.join(";")+";";
            if(skuMap[sku_key]!=undefined){
                return skuMap[sku_key];
            }else return null;
         }
         else return null;
    }
    //展示信息
    function showMsgBar(type,text){
        $(".msg").find("span").text(text);
        $(".msg").find("i").attr("class","icon icon-"+type);
    }
    //切换画廊图片
    $(".turn-right,.turn-left").on("click",function(){
        var canvas = $(".show-list >div");
        var num = canvas.find("a").size();
        var flage = -1;
        var current = 0;
        var width = 66;
        var show_num = 5;
        var left = 0;
        current = Math.round((Math.abs(canvas.position().left)/width));
        if($(this).hasClass("turn-left")){
            current--;
        }else{
            current++;
        }
        if(num-current>=show_num && current>=0){
            left = current*flage*width;
            canvas.animate({left:left},200);
        }
    })

    $("#attention").on("click",function(){
        $.post("<?php echo urldecode(Url::urlFormat("/index/attention"));?>",{goods_id:<?php echo isset($id)?$id:"";?>},function(data){
            if(data['status']==2) art.dialog.tips("<p class='warning'>已关注过了该商品！</p>");
            else if(data['status']==1) art.dialog.tips("<p class='success'>成功关注了该商品!</p>");
            else art.dialog.tips("<p class='warning'>你还没有登录！</p>");
        },'json')
    })
    //到货通知
    $("#goods-notify").on("click",function(){
        if(Tiny['user']['online']){
            art.dialog({id:'notify-dialog',content:document.getElementById('notify-dialog')});
        }else{
            art.dialog.tips("<p class='warning'>你还没有登录！</p>");
        }
        
    })
    function submit_notify(e)
    {
         if(e==null){
            var email = $("#n_email").val();
            var mobile = $("#n_mobile").val();
            $.post("<?php echo urldecode(Url::urlFormat("/index/notify"));?>",{goods_id:<?php echo isset($goods['id'])?$goods['id']:"";?>,email:email,mobile:mobile},function(data){
                if(data['status']!= undefined){
                    art.dialog({id:'notify-dialog'}).close();
                    art.dialog.tips('<p class="'+data['status']+'">'+data['msg']+'</p>');
                }
            },'json');
            return false;
        }
        return false;
    }
    </script>
<!--E 产品展示-->

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