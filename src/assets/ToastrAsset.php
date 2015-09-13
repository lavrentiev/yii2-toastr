<?php
/**
 * Yii2 - Javascript Toast Notifications
 * @link https://github.com/lavrentiev/yii2-toastr
 * @copyright Copyright (c) 2015 Eugene Lavrentiev (RyanTedder)
 */
namespace lavrentiev\widgets\toastr\assets;

use yii\web\AssetBundle;

/**
 * Class ToastrAsset
 * @package lavrentiev\widgets\toastr\assets
 */
class ToastrAsset extends AssetBundle
{
    /** @var string  */
    public $sourcePath = '@bower/toastr';

    /** @var array $css */
    public $css = [
        'toastr.min.css'
    ];

    /** @var array $js */
    public $js = [
        'toastr.min.js'
    ];

    /** @var array $depends */
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}