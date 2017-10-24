<?php

namespace lavrentiev\widgets\toastr;

use yii\helpers\Html;

class NotificationFlash extends NotificationBase
{
    /** @var object $session */
    private $session;

    /**
     * @inheritdoc
     */
    public function run()
    {
        $this->session = \Yii::$app->session;

        $flashes = $this->session->getAllFlashes();

        foreach ($flashes as $type => $data) {
            $data = (array) $data;

            foreach ($data as $i => $message) {
                Notification::widget(['type' => Html::encode($type), 'message' => Html::encode($message), 'options' => $this->options]);
            }

            $this->session->removeFlash($type);
        }
    }
}
