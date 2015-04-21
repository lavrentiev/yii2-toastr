<?php
/**
 * @copyright Copyright (c) 2006, 2015 Eugene Lavrentiev (RyanTedder)
 * @email lavrentiev.e@gmail.com
 */
namespace lavrentiev\yii2toastr;

use yii;
use lavrentiev\yii2toastr\assets\ToastrAsset;
/**
 * Class ToastrFlash
 * @package lavrentiev\yii2toastr
 */
class ToastrFlash extends Toastr
{
    /**
     * Initialization Widgets
     */
    public function init()
    {
        ToastrAsset::register($this->getView());

        $session = \Yii::$app->getSession()->getAllFlashes();

        foreach ($session as $type => $data) {

            if (isset($this->typeAlert[$type])) {

                $this->options = ($data['options']) ? $data['options'] : $this->options;

                if ($this->clear OR $data['clear'])
                    $this->clearNotification();

                echo Toastr::widget([
                    'type' => $this->typeAlert[$type],
                    'title' => yii\helpers\Html::encode($data['title']),
                    'message' => yii\helpers\Html::encode($data['message']),
                    'options' => $this->options
                ]);

                \Yii::$app->getSession()->removeFlash($type);
            }

        }
    }
}