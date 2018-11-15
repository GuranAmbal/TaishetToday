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
        "public/css/font-awesome.min.css",
        "public/css/style.css",
        "//use.fontawesome.com/releases/v5.1.0/css/all.css",

    ];
    public $js = [
        "public/js/scripts.js",
        "public/js/jquery.min.js",
    ];

}
