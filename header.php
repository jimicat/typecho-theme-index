<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle([
            'category' => _t('分类 %s 下的文章'),
            'search'   => _t('包含关键字 %s 的文章'),
            'tag'      => _t('标签 %s 下的文章'),
            'author'   => _t('%s 发布的文章')
        ], '', ' - '); ?><?php $this->options->title(); ?></title>
<!-- 使用url函数转换相关路径 -->
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
                <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" /></span>
            </a>
            <?php else: ?>
            <a style="text-decoration: none;" id="logo" href="<?php $this->options->siteUrl(); ?>"><span
                    style="color: #a00;font-weight: bold;"><?php $this->options->title() ?></span></a>

            <?php 
    // 检查是否为首页
    $isHome = $this->is('index');
    // 检查是否为404页面
    $is404 = $this->is('404');
    
    if (!$isHome && !$is404): ?>
            <span class="hl">/</span>
            <a href="<?php $this->permalink(); ?>">
                <?php if ($this->is('category') || $this->is('tag')): ?>
                <span class="hl"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
          ), '', ''); ?></span>
                <?php else: ?>
                <span><?php $this->title(); ?></span>
                <?php endif; ?>
            </a>
            <?php endif; ?>
        </div>

        <?php if ($this->is('index')): ?>
        <p class="description"><?php $this->options->description() ?></p>
        <?php endif; ?>
        <?php endif; ?>
        </div>
    </header>
    <div class="main">