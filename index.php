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
<div>
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
$totalPosts = postCount();
?>

<?php
$totalTags = tagCount();
?>
    <!-- 搜索框 -->
    <div class="searchBox">
        <form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
            <input type="text" id="search-input" name="s" class="search"
                placeholder="Search among <?php echo $totalPosts; ?> titles and <?php echo $totalTags; ?> tags..." />
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