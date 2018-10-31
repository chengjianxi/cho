<?php
/**
 * 修改自 Typecho 系统的一套默认皮肤
 * 
 * @package cho 
 * @author Cheng Jianxi
 * @version 1.0.0
 * @link https://pressc.cn
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<?php if (!empty($this->options->sidebarBlock)): ?>
<div class="col-mb-12 col-8" id="main" role="main">
<?php else: ?>
<div class="col-mb-12 col-12" id="main" role="main">
<?php endif; ?>
	<?php while($this->next()): ?>
        <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
			<h2 class="post-title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
			<ul class="post-meta">
				<li><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date(); ?></time></li>
			</ul>
            <div class="post-content" itemprop="articleBody">
    			<?php $this->content('- 阅读剩余部分 -'); ?>
            </div>
        </article>
	<?php endwhile; ?>

    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
