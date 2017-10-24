<?php

namespace lavrentiev\widgets\toastr;

use yii\web\AssetBundle;

class ToastrAsset extends AssetBundle
{
    /** @var string $sourcePath  */
    public $sourcePath = '@bower/toastr';

    /** @var array $css */
    public $css = [
        YII_ENV_DEV ? 'toastr.css' : 'toastr.min.css',
    ];

    /** @var array $js */
    public $js = [
        YII_ENV_DEV ? 'toastr.js' : 'toastr.min.js',
    ];

    /** @var array $depends */
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
