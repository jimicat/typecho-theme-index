<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div>
    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
        <?php postMeta($this, 'page'); ?>
        <div class="post-content" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>
    </article>
</div>
<?php $this->need('comment.php'); ?>
<?php $this->need('footer.php'); ?>
