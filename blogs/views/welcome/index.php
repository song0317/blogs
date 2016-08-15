<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>个人博客</title>
<meta name="keywords" content="个人博客模板,博客模板" />
<meta name="description" content="优雅、稳重、大气,低调。" />
<link href="css/index.css" rel="stylesheet">
<!-- 这里是加载遮罩层样式 -->
<script type="text/javascript" src='js/jquery-1.9.1.min.js'></script>
<script type="text/javascript" src='js/demo.js'></script>
<!-- 这里为结束 -->
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<![endif]-->
</head>
<body>
<header>
  <div id="logo"><a href="/"></a></div>
  <nav class="topnav" id="topnav">
      <a href="index.html"><span>首页</span><span class="en">Honme</span></a>
      <a href="about.html"><span>关于我</span><span class="en">About</span></a>
      </a><a href="saylist.html"><span>个人日记</span><span class="en">Diary</span></a>
      <a href="seolist.html"><span>SEO技术</span><span class="en">Seo</span></a>
      <?php if(Yii::$app->session->get('username')){?>
      <span id='login_save2'>
      <a href="javascript:void(0)" id="login_end">
        <span><?php echo Yii::$app->session->get('username');?></span>
        <span class="out">退出</span>
      </a>
      </span>
      <?php }else{?>
      <span id='login_save1'>
      <a href="javascript:void(0)" id='login-btn'>
        <span>登录</span>
        <span class="en">Login</span>
      </a>
      </span>
      <?php }?>
     
      <a href="gustbook.html"><span>留言版</span><span class="en">Gustbook</span></a>
  </nav>
</header>
<!--end header-->
<div class="banner">
  <section class="box">
    <ul class="texts">
      <p class="p1">纪念我们:</p>
      <p class="p2">终将逝去的青春</p>
      <p class="p3">By:少年</p>
    </ul>
  </section>
</div>
<!--end banner-->
<article>
  <h2 class="title_tj">
    <p>博主<span>推荐</span></p>
  </h2>
  <div class="bloglist left">
   <!--wz-->
   <?php foreach($data as $k=>$v):?>
    <div class="wz">
    <h3><?=$v['t_title']?></h3>
    <p class="dateview"><span><?=$v['t_time']?></span><span>作者：<?=$v['t_author']?></span><span>分类：[<a href="#"><?=$v['t_type_id']?></a>]</span></p>
    <figure><img src="images/001.jpg"></figure>
    <ul>
      <p><?=$v['t_content']?>...</p>
      <a title="阅读全文" href="index.php?r=welcome/detail&id=<?=$v['t_id']?>" target="_blank" class="readmore">阅读全文>></a>
    </ul>
    <div class="clear"></div>
    </div>
	<?php endforeach;?>
   <!--end-->
      <!--wz
    <div class="wz">
    <h3>关于响应式布局</h3>
    <p class="dateview"><span>2013-11-04</span><span>作者：段亮</span><span>分类：[<a href="#">web前端</a>]</span></p>
    <figure><img src="images/001.jpg"></figure>
    <ul>
      <p>随着互联网的快速发展，以及html5+css3的迅速崛起。渐渐的响应式布局，也会慢慢的出现在我们的视野里，身为专业的web前端，还不学习新技术你就out啦！为什么这样说呢？因为响应式布局能同时兼容多个终端，比如（手机、平板、PC）...</p>
      <a title="阅读全文" href="/" target="_blank" class="readmore">阅读全文>></a>
    </ul>
    <div class="clear"></div>
    </div>
   <!--end--> 
      <!--wz
    <div class="wz">
    <h3>关于响应式布局</h3>
    <p class="dateview"><span>2013-11-04</span><span>作者：段亮</span><span>分类：[<a href="#">web前端</a>]</span></p>
    <figure><img src="images/001.jpg"></figure>
    <ul>
      <p>随着互联网的快速发展，以及html5+css3的迅速崛起。渐渐的响应式布局，也会慢慢的出现在我们的视野里，身为专业的web前端，还不学习新技术你就out啦！为什么这样说呢？因为响应式布局能同时兼容多个终端，比如（手机、平板、PC）...</p>
      <a title="阅读全文" href="/" target="_blank" class="readmore">阅读全文>></a>
    </ul>
    <div class="clear"></div>
    </div>
   <!--end-->  
     <!--wz
    <div class="wz">
    <h3>关于响应式布局</h3>
    <p class="dateview"><span>2013-11-04</span><span>作者：段亮</span><span>分类：[<a href="#">web前端</a>]</span></p>
    <figure><img src="images/001.jpg"></figure>
    <ul>
      <p>随着互联网的快速发展，以及html5+css3的迅速崛起。渐渐的响应式布局，也会慢慢的出现在我们的视野里，身为专业的web前端，还不学习新技术你就out啦！为什么这样说呢？因为响应式布局能同时兼容多个终端，比如（手机、平板、PC）...</p>
      <a title="阅读全文" href="/" target="_blank" class="readmore">阅读全文>></a>
    </ul>
    <div class="clear"></div>
    </div>
   <!--end-->  
     <!--wz
    <div class="wz">
    <h3>关于响应式布局</h3>
    <p class="dateview"><span>2013-11-04</span><span>作者：段亮</span><span>分类：[<a href="#">web前端</a>]</span></p>
    <figure><img src="images/001.jpg"></figure>
    <ul>
      <p>随着互联网的快速发展，以及html5+css3的迅速崛起。渐渐的响应式布局，也会慢慢的出现在我们的视野里，身为专业的web前端，还不学习新技术你就out啦！为什么这样说呢？因为响应式布局能同时兼容多个终端，比如（手机、平板、PC）...</p>
      <a title="阅读全文" href="/" target="_blank" class="readmore">阅读全文>></a>
    </ul>
    <div class="clear"></div>
    </div>
   <!--end-->    
  </div>
  <!--right-->
  <aside class="right"> 
    <div class="my">
     <h2>关于<span>博主</span></h2>
     <img src="images/my.jpg" width="200" height="200" alt="博主">
       <ul>
        <li>博主：少年</li>
        <li>职业:web前端、网站运营</li>
        <li>简介：一个不断学习和研究，web前端和SEO技术的90后草根站长.</li>
        <li></li>   
       </ul>
    </div>
    <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
    <div class="news">
    <h3 class="ph">
      <p>点击<span>排行</span></p>
    </h3>
    <ul class="paih">
      <li><a href="/" title="如何建立个人博客" target="_blank">如何建立个人博客</a></li>
      <li><a href="/" title="html5标签" target="_blank">html5标签</a></li>
      <li><a href="/" title="一个网站的开发流程" target="_blank">一个网站的开发流程</a></li>
      <li><a href="/" title="做网站到底需要什么?" target="_blank">做网站到底需要什么?</a></li>
      <li><a href="/" title="企业做网站具体流程步骤" target="_blank">企业做网站具体流程步骤</a></li>
    </ul>
    <h3>
      <p>用户<span>关注</span></p>
    </h3>
    <ul class="rank">
      <li><a href="/" title="如何建立个人博客" target="_blank">如何建立个人博客</a></li>
      <li><a href="/" title="一个网站的开发流程" target="_blank">一个网站的开发流程</a></li>
      <li><a href="/" title="关键词排名的三个时期" target="_blank">关键词排名的三个时期</a></li>
      <li><a href="/" title="做网站到底需要什么?" target="_blank">做网站到底需要什么?</a></li>
      <li><a href="/" title="关于响应式布局" target="_blank">关于响应式布局</a></li>
      <li><a href="/" title="html5标签" target="_blank">html5标签</a></li>
    </ul>
    
    <h3 class="links">
      <p>友情<span>链接</span></p>
    </h3>
    <ul class="website">
      <li><a href="#">个人博客</a></li>
      <li><a href="wwww.duanliang920.com">段亮博客</a></li>
    </ul> 
    </div> 
</article>
<footer>
  <p><span>Design By:<a href="www.duanliang920.com" target="_blank">段亮</a></span><span>网站地图</span><span><a href="/">网站统计</a></span></p>
</footer>
<script src="js/nav.js"></script>
<!--百度分享-->
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"32"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
<!-- 遮罩层 -->

<div id="divLoginWindow">
<table style="width: 100%;" border="0" cellpadding="2" cellspacing="0" >
    <tr style="background-color: #e0f3d9; border-bottom: #bfe5b3 solid 2px">
        <td style="height: 38px; width: 100px;">
            &nbsp;用户登录
        </td>
        <td>
            <img src="imgs/close.png" id="closeBtn" align="absmiddle" alt="关闭" title="关闭" />
        </td>
    </tr>
    <tr>
        <td colspan="2" style="height: 5px;">
        </td>
    </tr>
    <tr>
        <td align="right" style="height:40px;">
            &nbsp;用户名：
        </td>
        <td style="height:40px;">
            <input type='text' id='name_val'/>
        </td>
    </tr>
    <tr>
        <td align="right" style="height:40px;">
            &nbsp;密&nbsp;&nbsp;&nbsp;码：
        </td>
        <td style="height:40px;">
            <input type='password' id="pwd_val" />
        </td>
    </tr><!-- 
    <tr>
        <td align="right">
            &nbsp;验证码：
        </td>
        <td>
            <input type='text' />
            <img src="imgs/code.png" id="imgRndCode" style="vertical-align: middle;"
                alt="验证码" title="看不清，点击图片更换图片" />
        </td>
    </tr> -->
    <tr>
        <td colspan="2" align="center" style="height:40px;" >
        <input name="_csrf" type="hidden" id="_csrf" value="<?= Yii::$app->request->csrfToken ?>">
            <button id="login_mask" style="cursor:pointer">登&nbsp;录</button>
            <br />
            <span id="showMes"></span>
        </td>
    </tr>
</table>
</div>
<!-- 结束遮罩层 -->
</body>
</html>