<?php
/**
 * 自定义首页模板
 *
 * @package index
 */
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->options->title(); ?></title>
    <meta name="keywords" content="chengjianxi" />
    <meta name="description" content="" />

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/normalize/7.0.0/normalize.min.css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('grid.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">

    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">.indexcolor,.willerce a{color:#000000 !important;}</style>
    <style type="text/css" id="custom-background-css">
        body.custom-background { background-color: #ffffff; background-image: url("<?php $this->options->themeUrl('background.jpg'); ?>"); background-position: center center; background-size: cover; background-repeat: no-repeat; background-attachment: fixed; }
    </style>
    <style>
        *{margin:0;padding:0}body{overflow:hidden}.willerce{text-align:center;margin:100px auto auto auto;max-width:500px;padding:0 20px}.willerce a{color:#535353;text-decoration:underline}.willerce a:link,.willerce a:visited{text-decoration:underline}h1{font-size:26px;color:#424242;margin-bottom:20px}.avatar{border-radius:64px;}.nav a{padding:0 6px 0 6px}@keyframes fade-in{0%{opacity:0}40%{opacity:0}100%{opacity:1}}@-webkit-keyframes fade-in{0%{opacity:0}40%{opacity:0}100%{opacity:1}}.willerce{animation:fade-in;animation-duration:1s;-webkit-animation:fade-in 1s}
        .sydlogo{position:relative;width:128px;height:128px;margin:0 auto;margin-bottom:35px;}
        .zjgx {position:absolute;background:#f00;font-size:16px;height:40px;width:40px;line-height:40px;text-align:center;top:0px;right:0px;border-radius:20px;color:#fff;}
    </style>
</head>
<body class="custom-background">
<div class="willerce">
	<div class="sydlogo">
        <img class="avatar" width="128" height="128" src="<?php $this->options->themeUrl('avatar.png'); ?>">			
    </div>
	<h1 class="indexcolor">Cheng Jianxi</h1>
	<p class="indexcolor">Work @ Harbin Wisdom Digital Technology Co.,Ltd. <br> More <a href="about.html">About Me</a> </p>
	<p class="indexcolor" style="height: 24px; line-height: 24px; margin: 15px 0;">
    <i class="iconfont icon-dituzuobiao"></i>Harbin · China 	</p>
	<p class="nav">
        <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
        <?php while($pages->next()): ?>
            <a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
        <?php endwhile; ?>
	</p>
</div>
</body></html>