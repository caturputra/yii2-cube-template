<?php

namespace sieren\cube;
use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class CubeAsset extends AssetBundle
{
    public $sourcePath = '@frontend/web/theme';
    public $css = [

    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
        'frontend\assets\PluginsAsset',
    ];
}
