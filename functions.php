<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点 LOGO 地址'), _t('在这里填入一个图片 URL 地址, 以在网站标题前加上一个 LOGO'));
    $form->addInput($logoUrl);
    
    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowRecentPosts' => _t('显示最新文章'),
    'ShowRecentComments' => _t('显示最近回复'),
    'ShowCategory' => _t('显示分类'),
    'ShowArchive' => _t('显示归档'),
    'ShowOther' => _t('显示其它杂项')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multiMode());

    /* 每页文章数目 */
    // $pageSize = new Typecho_Widget_Helper_Form_Element_Text(
    //     'pageSize',
    //     NULL,
    //     10,
    //     _t('每页文章数目'),
    //     _t('此数目用于指定文章归档输出时每页显示的文章数目.')
    // );
    // $pageSize->input->setAttribute('class', 'w-20');
    // $form->addInput($pageSize->addRule('isInteger', _t('请填入一个数字')));
}

/* 定义首页文章分布数量 */
// function themeInit($archive)
// {
//     if ($archive->is('index')) {
//         $archive->parameter->pageSize = 10;
//     }
// }


/*
function themeFields($layout) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $layout->addItem($logoUrl);
}
*/

