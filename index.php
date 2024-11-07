<?php
/**
 * Modify based on Index
 *
 * @package Typecho Theme Index
 * @author JimiCat
 * @version 1.0
 * @link https://jimicat.github.io
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<div class="col-mb-12 col-8" id="main" role="main">
    <?php if (!($this->is('index')) and !($this->is('post'))): ?>
    <?php endif; ?>

    <?php if ($this->have()): ?>
    <?php $this->widget('Widget_Metas_Tag_Cloud')->to($taglist); ?>
    <div class="all-tags">
        <ul class="tagsList">
            <?php while($taglist->next()): ?>
            <li>
                <a href="<?php $taglist->permalink(); ?>"><?php $taglist->name(); ?></a>
            </li>
            <?php endwhile; ?>
        </ul>
    </div>


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

    <table class="tableList">
        <thead>
            <tr>
                <th>Title</th>
                <th>Tags</th>
            </tr>
        </thead>
        <tbody id="tableListBody">
            <?php while ($this->next()): ?>
            <tr>
                <td>
                    <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                </td>
                <td>
                    <ul class="tagsList">
                        <?php if ($this->tags): ?>
                        <?php foreach ($this->tags as $tag): ?>
                        <li>
                            <a href="<?php echo $tag['permalink']; ?>"><?php echo $tag['name']; ?></a>
                        </li>
                        <?php endforeach; ?>
                        <?php else: ?>
                        <?php endif; ?>

                    </ul>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <?php else: ?>
    <article class="post">
        <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
    </article>
    <?php endif; ?>
</div>
<?php $this->need('footer.php'); ?>