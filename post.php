<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="content">

    <div class="post-title"><?php $this->title() ?></div>

    <?php $this->content(); ?>
    <ul class="tagsList single">

        <?php if ($this->tags): ?>
            <?php foreach ($this->tags as $tag): ?>
                <li>
                    <a href="<?php echo $tag['permalink']; ?>"><?php echo $tag['name']; ?></a>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
        <?php endif; ?>
    </ul>


    <div class="my-4" id="copyright-info">
        <p class="my-2">
            版权声明：本文为原创文章，版权归 <a href="/"><?php
                                echo get_post_author($this);
                                ?></a> 所有，转载请联系博主获得授权。
        </p>
        <p class="my-2">
            本文地址：<a href="" target="_blank"><?php $this->url() ?></a>
        </p>
        <p class="my-2">
            如果对本文有什么问题或疑问都可以在评论区留言，我看到后会尽量解答。
        </p>
    </div>
</div>

<?php $this->need('comment.php'); ?>

<?php $this->need('footer.php'); ?>