<?php
/**
 * @copyright Copyright (c) 2006, 2015 Eugene Lavrentiev (RyanTedder)
 * @email lavrentiev.e@gmail.com
 */
namespace lavrentiev\yii2toastr\assets;

use yii\web\AssetBundle;
/**
 * Class ToastrAsset
 * @package lavrentiev\yii2toastr\assets
 */
class ToastrAsset extends AssetBundle
{
    public $sourcePath = '@bower/toastr';

    public $css = [
        'toastr.min.css'
    ];

    public $js = [
        'toastr.min.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}