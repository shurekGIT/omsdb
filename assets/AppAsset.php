<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'theme/bootstrap/css/bootstrap.min.css',
        'theme/download/font-awesome.min.css',
        'theme/download/ionicons.min.css',
        'theme/dist/css/AdminLTE.min.css',
        'theme/dist/css/skins/_all-skins.min.css',
      
        
        
        
    ];
    public $js = [
        'theme/bootstrap/js/bootstrap.min.js',
        'theme/plugins/fastclick/fastclick.min.js',
        'theme/dist/js/app.min.js',
        'theme/dist/js/demo.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
