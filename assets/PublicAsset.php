<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class PublicAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "public/css/bootstrap.min.css",
        "public/css/font-awesome.min.css",
        "public/css/style.css",
        "public/css/swiper.min.css",
        "/use.fontawesome.com/releases/v5.1.0/css/all.css",
        "public/css/jquery.fancybox.min.css",

    ];
    public $js = [
        "public/js/jquery.min.js",
        "public/js/jquery.fancybox-1.3.4.pack.js",
        "public/js/swiper.min.js",
        "public/js/slider-main.js",
        "public/js/main.js",
        "public/js/scripts.js",

    ];
}
