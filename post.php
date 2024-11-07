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
</div>

<?php $this->need('comment.php'); ?>

<?php $this->need('footer.php'); ?>