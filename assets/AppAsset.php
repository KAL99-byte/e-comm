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
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    // 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css',

    'css/all.min.css',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',
  

   'css/animate.min.css',
   'css/owl.carousel.min.css',
    'css/style.css',

    ];
    public $js = [




        'js/jquery-3.4.1.min.js',
     'js/bootstrap/4.4.1/js/bootstrap.bundle.min.js',
   
     'js/easing.min.js',
     'js/owl.carousel.min.js',
     'js/jqBootstrapValidation.min.js',
    'js/contact.js',
     'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}