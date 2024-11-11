<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->options->title(); ?></title>
    <!-- 使用url函数转换相关路径 -->
    <link rel="shortcut icon" href="<?php $this->options->themeUrl('images/favicon.ico'); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>">
    <?php if ($this->is('post')): ?>
        <link rel="stylesheet" href="<?php $this->options->themeUrl('css/markdown.css'); ?>">
    <?php endif; ?>
    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>

<body>
    <header>
        <div class="title">
            <?php if ($this->options->logoUrl): ?>
                <a id="logo" href="<?php $this->options->siteUrl(); ?>">
                    <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" style="width: 32px; height: auto;" /></span>
                </a>
            <?php else: ?>
                <a style="text-decoration: none;" id="logo" href="<?php $this->options->siteUrl(); ?>"><span
                        style="color: #a00;font-weight: bold;"><?php $this->options->title() ?></span></a>

                <span class="men" style="margin-left: 20px;">


                    <a style="text-decoration: none;" <?php if ($this->is('index')): ?> class="current" <?php endif; ?>
                        href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
                    <?php \Widget\Contents\Page\Rows::alloc()->to($pages); ?>
                    <?php while ($pages->next()): ?>
                        <a style="text-decoration: none;" <?php if ($this->is('page', $pages->slug)): ?> class="current" <?php endif; ?>
                            href="<?php $pages->permalink(); ?>"
                            title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                    <?php endwhile; ?>
                </span>


        </div>



        <?php if ($this->is('index')): ?>
            <p class="description"><?php $this->options->description() ?></p>
        <?php endif; ?>
    <?php endif; ?>
    </div>
    </header>
    <div class="main">