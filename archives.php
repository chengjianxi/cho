<?php
/**
 * 文章归档页面
 *
 * @package custom
 */
?>
<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <?php if (!empty($this->options->sidebarBlock)) : ?>
    <div class="col-mb-12 col-8" id="main" role="main">
    <?php else : ?>
    <div class="col-mb-12 col-12" id="main" role="main">
    <?php endif; ?>
    
    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
        <h1 class="post-title" itemprop="name headline"><a itemprop="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
        <div class="post-content" itemprop="articleBody">
        <?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=999')->to($archives);
        $year = 0;
        $output = '<div id="archives" class="post-content">';
        while ($archives->next()) :
            $year_tmp = date('Y', $archives->created);
        if ($year != $year_tmp && $year > 0)
            $output .= '</ul>';
        if ($year != $year_tmp) {
            $year = $year_tmp;
            $output .= '<div class="archives-date-year">' . $year . '</div><ul>'; // 输出年份
        }
        $output .= '<li><span class="archives-date">' . date('Y-m-d', $archives->created) . '</span> — ' . '<a href="' . $archives->permalink . '">' . $archives->title . '</a></li>'; // 输出文章日期和标题
        endwhile;
        $output .= '</ul></div>';
        echo $output;
        ?>
        </div>
    </article>

    </div><!-- end #main -->
    <?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>