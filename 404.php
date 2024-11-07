<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="col-mb-12 col-tb-8 col-tb-offset-2">

    <div class="error-page">
        <h2 class="post-title">404 - <?php _e('页面没找到'); ?></h2>
        <p><?php _e('你想查看的页面已被转移或删除了, 要不要搜索看看: '); ?></p>

        <?php
// 初始化标签小工具，用于获取所有标签
$tagWidget = Typecho_Widget::widget('Widget_Metas_Tag_Cloud');

// 统计标签数量
$tagCount = 0;
while ($tagWidget->next()) {
    $tagCount++;
}
?>

<?php
// 初始化文章小工具，用于获取所有文章
$postWidget = Typecho_Widget::widget('Widget_Contents_Post_Recent');

// 统计文章数量
$postCount = 0;
while ($postWidget->next()) {
    $postCount++;
}
?>
        
            <!-- 搜索框 -->
    <div class="searchBox">
        <form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
            <input type="text" id="search-input" name="s" class="search"
                placeholder="Search among <?php echo $postCount; ?> titles and <?php echo $tagCount; ?> tags..." />
        </form>
    </div>

    </div>

</div><!-- end #content-->
<?php $this->need('footer.php'); ?>
