<!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>段亮博客</title>
<meta name="keywords" content="个人博客,段亮个人博客" />
<meta name="description" content="段亮个人博客，是记录博主学习和成长的一个自媒体博客。主要分享互联网上最前沿的web前端技术和SEO技术，同时博客也免费提供网站模板下载和个人博客模板下载。" />
<link href="css/index.css" rel="stylesheet">
<link href="css/new.css" rel="stylesheet">
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
  <a href="weblist.html"><span>WEB前端</span><span class="en">Web</span></a>
  <a href="gustbook.html"><span>留言版</span><span class="en">Gustbook</span></a></nav>
</header>
<article class="blogs">
  <h1 class="t_nav"><span>您当前的位置：<a href="#">首页</a>&nbsp;&gt;&nbsp;<a href="#">日记</a></span><a href="/" class="n1">网站首页</a><a href="/" class="n2">日记</a></h1>
  <div class="index_about">
    <h2 class="c_titile"><?=$data['t_title']?></h2>
    <p class="box_c"><span class="d_time">发布时间：<?=$data['t_time']?></span><span>编辑：<?=$data['t_author']?></span><span>互动QQ群：<a href="http://shang.qq.com/wpa/qunwpa?idkey=89276e0cb9fadcbe6334cbba01277747ac448b27386421cc35e761282be31668"> 347240981</a></span></p>
    <ul class="infos">
      <p>
	  <?=$data['t_content']?></p>
    </ul>
    <div class="keybq">
    <p><span>关键字词</span>：爱情,犯错,原谅,分手</p>
    
    </div>
    <div class="ad"> </div>
    <div class="nextinfo">
      <p>上一篇：<a href="#">程序员应该如何高效的工作学习</a></p>
      <p>下一篇：<a href="#">柴米油盐的生活才是真实</a></p>
    </div>
    <div class="otherlink">
      <h2>相关文章</h2>
      <ul>
        <li><a href="#" title="相遇就是缘分">相遇就是缘分</a></li>
        <li><a href="#" title="相遇就是缘分">相遇就是缘分</a></li>
        <li><a href="#" title="相遇就是缘分">相遇就是缘分</a></li>
        <li><a href="#" title="世上最美好的爱情">世上最美好的爱情</a></li>
        <li><a href="#" title="爱情没有永远，地老天荒也走不完">爱情没有永远，地老天荒也走不完</a></li>
        <li><a href="#" title="爱情的背叛者">爱情的背叛者</a></li>
      </ul>
    </div>
  </div>
  <aside class="right">
    <!-- Baidu Button BEGIN -->
    <div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare"><a class="bds_tsina"></a><a class="bds_qzone"></a><a class="bds_tqq"></a><a class="bds_renren"></a><span class="bds_more"></span><a class="shareCount"></a></div>
    <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6574585" ></script> 
    <script type="text/javascript" id="bdshell_js"></script> 
    <script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script> 
    <!-- Baidu Button END -->
    <div class="blank"></div>
    <div class="news">
      <h3>
        <p>栏目<span>最新</span></p>
      </h3>
      <ul class="rank">
        <li><a href="/">一个网站的开发流程</a></li>
        <li><a href="/">一个网站的开发流程</a></li>
        <li><a href="/">一个网站的开发流程</a></li>
        <li><a href="/">做网站到底需要什么?</a></li>
        <li><a href="/">一个网站的开发流程</a></li>
        <li><a href="/">一个网站的开发流程</a></li>
      </ul>
      <h3 class="ph">
        <p>点击<span>排行</span></p>
      </h3>
      <ul class="paih">
        <li><a href="/">一个网站的开发流程</a></li>
        <li><a href="/">一个网站的开发流程</a></li>
        <li><a href="/">一个网站的开发流程</a></li>
        <li><a href="/">做网站到底需要什么?</a></li>
        <li><a href="/">一个网站的开发流程</a></li>
      </ul>
    </div>
  </aside>
</article>
<footer>
  <p><span>Design By:<a href="www.duanliang920.com" target="_blank">段亮</a></span><span>网站地图</span><span><a href="/">网站统计</a></span></p>
</footer>
<script src="js/nav.js"></script>
</body>
</html>