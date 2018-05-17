<?php

namespace sieren\cube;
use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class CubeAsset extends AssetBundle
{
    public $sourcePath = '@sieren/cube/src';
    public $css = [

    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'rmrevin\yii\fontawesome\AssetBundle',
        'sieren\cube\PluginsAsset',
    ];
}
