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
class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'ui-adm/css/site.css',
        'ui-adm/assets/vendor/bootstrap/css/bootstrap.min.css',
        'ui-adm/assets/vendor/bootstrap-icons/bootstrap-icons.css',
        'ui-adm/assets/vendor/boxicons/css/boxicons.min.css',
        'ui-adm/assets/vendor/quill/quill.snow.css',
        'ui-adm/assets/vendor/quill/quill.bubble.css',
        'ui-adm/assets/vendor/remixicon/remixicon.css',
        'ui-adm/assets/vendor/simple-datatables/style.css',
        'ui-adm/css/styles.css',
        'ui-adm/css/style.css',
        'ui-adm/css/bootstrap.css',
        'ui-adm/css/dataTables.bootstrap4.min.css',
        'ui-adm/css/bootstrap-datepicker.min.css',





    ];
    public $js = [

       'ui-adm/assets/vendor/apexcharts/apexcharts.min.js',
       'ui-adm/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
       'ui-adm/assets/vendor/chart.js/chart.umd.js',
       'ui-adm/assets/vendor/echarts/echarts.min.js',
        'ui-adm/assets/vendor/quill/quill.min.js',
        'ui-adm/assets/vendor/simple-datatables/simple-datatables.js',
        'ui-adm/assets/vendor/tinymce/tinymce.min.js',
        'ui-adm/assets/vendor/php-email-form/validate.js',
        'ui-adm/js/main.js',
        'ui-adm/js/datatables.js',  
        'ui-adm/js/jquery.dataTables.min.js',
        'ui-adm/js/dataTables.bootstrap4.min.js',
        'ui-adm/js/bootstrap-datepicker.min.js',
        'ui-adm/js/datepicker.js',

      
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
