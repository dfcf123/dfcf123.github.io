<?
$url = $_POST["url"];
$interval = $_POST["interval"];

if($url){

$id = file_get_contents("https://api.instagram.com/oembed/?url=".$url);
$id = json_decode($id, 1);
$id = $id["media_id"];

if($id){

header("Location: http://777.loc:81/add.php?interval=".$interval."&id=".$id);

}else{

$response = '<div class="alert alert-danger"><center>Неверная ссылка на фотографию или закрытый профиль.</center></div>';

}
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
<link rel="icon" href="assets/images/favicon.ico">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css">
<link rel="stylesheet" href="assets/css/jquery.scrollbar.css">
<link rel="stylesheet" href="assets/css/app.min.css">
<script src="//ddnk.advertur.ru/v1/s/loader.js" async></script>
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
<li class="navigation"><a href="https://vk.com/vkazri" target="_blank"><i class="zmdi zmdi-vk"></i> VK</a></li>
<li class="navigation"><a href="https://vk.com/vkazri" target="_blank"><i class="zmdi zmdi-code-setting"></i>Группа ВК</a></li>
</aside>
<section class="content">
<div class="card">
<div class="card-header">
<h2 class="card-title">Накрутка бесплатных лайков Instagram</h2>
</div>
<div class="card-block">
<form method="post">
<?=$response;?>
<div class="form-group"><input type="text" class="form-control" placeholder="Введите ссылку на фотографию" name="url" value="<?=$url;?>" required><i class="form-group__bar"></i></div>
<center><button type="submit" class="btn btn-primary waves-effect">Запустить накрутку лайков</button></center>
</form>
</div>
</div>
</section>
</main>
<script>
$(document).ready(function(){ App.init(); });
</script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/tether.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/waves.min.js"></script>
<script src="assets/js/jquery.scrollbar.min.js"></script>
<script src="assets/js/jquery-scrollLock.min.js"></script>
<script src="assets/js/autosize.min.js"></script>
<script src="assets/js/app.min.js"></script>
</body>
</html>