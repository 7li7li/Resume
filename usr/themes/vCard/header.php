<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?php $this -> archiveTitle(array(
        'category'  =>  _t('%s'),
        'search'    =>  _t('含关键词 %s 的文章'),
        'tag'       =>  _t('标签 %s 下的文章'),
        'author'    =>  _t('%s 发布的文章')
    ), '', ' - '); $this -> options -> title(); ?>
    <?php if ($this->is('index')): ?><?php endif; ?>
</title>
    <?php if($this->options->favicon): ?><link rel="shortcut icon" href="<?php $this->options->favicon(); ?>"><?php endif;?>
	<!-- Meta Data -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="format-detection" content="telephone=no"/>
    <meta name="format-detection" content="address=no"/>
    <meta name="author" content="ArtTemplate" />
    <meta name="description" content="vCard" />

    <!-- Twitter data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@ArtTemplates">
    <meta name="twitter:title" content="vCard">
    <meta name="twitter:description" content="vCard">
    <meta name="twitter:image" content="assets/images/social.jpg">

    <!-- Open Graph data -->
    <meta property="og:title" content="ArtTemplate" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="your url website" />
    <meta property="og:image" content="assets/images/social.jpg" />
    <meta property="og:description" content="vCard" />
    <meta property="og:site_name" content="vCard" />

	<!-- Favicons -->
	<link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicons/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicons/apple-touch-icon-57x57.png">
	<link rel="shortcut icon" href="assets/images/favicons/favicon.png" type="image/png">

    <!-- Styles -->

	<link rel="stylesheet" href="<?php $this->options->themeUrl('assets/styles/style.css'); ?>">
    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
<?php if ($this->options->webcss): ?>
<style type="text/css"><?php $this->options->webcss(); ?></style>
<?php endif; ?>
<?php if ($this->options->tophtml): ?>
<?php $this->options->tophtml(); ?>
<?php endif; ?>
<?php if ($this->is('post')) : ?>
<?php if ($this->options->baiduappdi): ?>
<link rel="canonical" href="<?php $this->permalink() ?>"/>
<script src="//msite.baidu.com/sdk/c.js?appid=<?php $this->options->baiduappdi(); ?>"></script>
<?php endif; ?>
<?php endif; ?>
</head>
<body class="bg-triangles <?php echo($_COOKIE['night'] == '1'?'night':''); ?>" >
    <!-- Preloader -->
    <div class="preloader">
	    <div class="preloader__wrap">
		    <div class="circle-pulse">
                <div class="circle-pulse__1"></div>
                <div class="circle-pulse__2"></div>
            </div>
		    <div class="preloader__progress"><span></span></div>
		</div>
	</div>