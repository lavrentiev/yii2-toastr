<?php

namespace lavrentiev\widgets\toastr;

use yii\web\AssetBundle;

class ToastrAsset extends AssetBundle
{
    /** @var string $sourcePath  */
    public $sourcePath = '@bower/toastr';

    /** @var array $css */
	
    public $css = [
      
    ];

    /** @var array $js */
	
    public $js = [
       
    ];

    /** @var array $depends */
    public $depends = [
        'yii\web\YiiAsset',
    ];
	
	public function init()
    {
        $min = YII_ENV_DEV ? '' : '.min';
        $this->css[]='toastr' . $min . '.css';
        $this->js[]='toastr' . $min . '.js';
        

        parent::init();
    }
}
