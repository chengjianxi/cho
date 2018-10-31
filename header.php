<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/normalize/7.0.0/normalize.min.css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('grid.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('sidebar.css'); ?>">

    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="<?php $this->options->themeUrl('js/jquery-1.11.2.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php $this->options->themeUrl('js/topcontrol.js'); ?>"></script>
    <script type="text/javascript" src="<?php $this->options->themeUrl('js/simpler-sidebar.js'); ?>"></script>

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->

<header id="header" class="clearfix">
    <div class="container">
        <div class="row">
            <div class="col-mb-12 col-9">
                <div class="nav-avatar">
                    <a href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->title() ?>"><img id="avatar" width="26" height="26" src="<?php $this->options->themeUrl('avatar.png'); ?>"></a>
                </div>
                <nav id="nav-menu" class="clearfix" role="navigation">
                    <ul class="nav-ul">
                        <!-- <li class="nav-li">
                            <a<?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
                        </li> -->
                    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                        <?php while($pages->next()): ?>
                            <li class="nav-li">
                                <?php if($pages->sequence != 1): ?> <span>·</span> <?php endif; ?>
                                <a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>         
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </nav>
                <!-- 侧边菜单栏按钮 -->
                <div id="nav-sidebar-btn" class="clearfix" role="navigation" style="cursor: pointer;">
                    <i class="iconfont icon-menu"></i>
                </div>
            </div>
            <!-- 搜索框 -->
            <div class="site-search col-3 kit-hidden-tb">
                <form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
                    <label for="s" class="sr-only"><?php _e('搜索关键字'); ?></label>
                    <input type="text" id="s" name="s" class="text" placeholder="<?php _e('输入关键字搜索'); ?>" />
                    <button type="submit" class="submit"><?php _e('搜索'); ?></button>
                </form>
            </div>
        </div><!-- end .row -->
    </div>
</header><!-- end #header -->



<!-- <div id="nav-sidebar-btn" style="cursor: pointer;">
<i  class="iconfont icon-menu"></i>
    </div> -->
<div id="nav-sidebar-nemu">
		<ul class="nav-sidebar-ul">
        <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                        <?php while($pages->next()): ?>
                            <li>
                                <a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>         
                            </li>
                        <?php endwhile; ?>
		</ul>
</div>

<script>
$(function() {
	$('#nav-sidebar-nemu').simplerSidebar({
		opener: '#nav-sidebar-btn',
		sidebar: {
			align: 'right',
			width: 250
		}
	});
});
</script>

<div id="body">
    <div class="container">
        <div class="row">

    
    
