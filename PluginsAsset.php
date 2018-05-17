<?php
namespace sieren\cube;

use yii\web\AssetBundle;

/**
 * Plugins asset bundle.
 */
class PluginsAsset extends AssetBundle
{
    public $sourcePath = '@sieren/cube/src';
    public $css = [
        'css/compiled/theme_styles.css',
        'css/libs/nanoscroller.css',
        'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300',
    ];
    public $js = [
        'components/bootstrap/dist/js/bootstrap.js',
        'components/nanoscroller/bin/javascripts/jquery.nanoscroller.min.js',
        'components/PACE/pace.min.js',
        'js/scripts.js',
    ];
}
