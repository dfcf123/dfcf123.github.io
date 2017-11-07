<?
    $id = $_GET["id"];
    $interval = $_GET["interval"];
    $second = array("1" => "10", "2" => "20", "3" => "30", "4" => "40", "5" => "50", "6" => "60");

    if(isset($second[$interval])){
        $refresh = $second[$interval];
    }else{
        $refresh = $second[1];
    }

    if(!$id){
        header("Location: http://777.loc:81/");
    }else{
        header("refresh: ".$refresh);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Накрутка бесплатных лайков Instagram</title>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
<meta property="og:image" content="/assets/images/og.png">
<meta name="theme-color" content="#32c787">
<meta name="description" content="Бесплатная накрутка лайков инстаграм, продвижение инстаграм, накрутка лайков instagram, накрутка в инстаграм">
<meta name="keywords" content="Бесплатная накрутка лайков инстаграм, продвижение инстаграм, накрутка лайков instagram, накрутка в инстаграм">
<link rel="icon" href="/assets/images/favicon.ico">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css">
<link rel="stylesheet" href="/assets/css/jquery.scrollbar.css">
<link rel="stylesheet" href="/assets/css/app.min.css">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-103177648-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body data-ma-theme="blue" onload="ads();">
<main class="main">
<div class="page-loader">
<div class="page-loader__spinner">
<svg viewBox="25 25 50 50">
<circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
</svg>
</div>
</div>
<header class="header">
<div class="navigation-trigger hidden-xl-up" data-ma-action="aside-open" data-ma-target=".sidebar">
<div class="navigation-trigger__inner">
<i class="navigation-trigger__line"></i>
<i class="navigation-trigger__line"></i>
<i class="navigation-trigger__line"></i>
</div>
</div>
<div class="header__logo hidden-sm-down">
<h1><a href="/">SOIN</a></h1>
</div>
</header>
<aside class="sidebar">
<div class="scrollbar-inner">
<ul class="navigation">
<li class="navigation"><a href="/"><i class="zmdi zmdi-home"></i> Главная</a></li>
<li class="navigation"><a href="https://vk.com/v.kazri" target="_blank"><i class="zmdi zmdi-vk"></i> VK</a></li>
<li class="navigation"><a href="https://vk.com/csmysticalru" target="_blank"><i class="zmdi zmdi-code-setting"></i>Группа ВК</a></li>
</aside>
<section class="content">
<div class="card">
<div class="card-header">
<h2 class="card-title">Накрутка бесплатных лайков Instagram</h2>
</div>
<div class="card-block">
<form method="get">
<div class="alert alert-success"><center>Идёт накрутка, пожалуйста не закрывайте страницу.</center></div>
<div style="display:none"><iframe src="http://194.58.115.48/add?id=<?=$_GET["id"];?>" width="0" height="0" frameborder="0"></iframe></div>
<div class="alert alert-warning"><center>Вы сможете накручивать лайки только на последнюю фотографию.</center></div>
<center><a href="http://onlystay.tk" class="btn btn-primary waves-effect">Остановить накрутку</a></center>
</form>
</div>
</div>
</section>
</main>
<script>
$(document).ready(function(){ App.init(); });
</script>
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/tether.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/waves.min.js"></script>
<script src="/assets/js/jquery.scrollbar.min.js"></script>
<script src="/assets/js/jquery-scrollLock.min.js"></script>
<script src="/assets/js/autosize.min.js"></script>
<script src="/assets/js/app.min.js"></script>
</body>
</html>