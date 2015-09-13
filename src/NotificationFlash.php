<?php
/**
 * Yii2 - Javascript Toast Notifications
 * @link https://github.com/lavrentiev/yii2-toastr
 * @copyright Copyright (c) 2015 Eugene Lavrentiev (RyanTedder)
 */
namespace lavrentiev\widgets\toastr;

use yii\helpers\Json;

/**
 * Class NotificationFlash
 * @package lavrentiev\widgets\toastr
 */
class NotificationFlash extends Notification
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        $session = \Yii::$app->session;

        $flashes = $session->getAllFlashes();

        foreach ($flashes as $type => $data) {

            $data = (array) $data;

            foreach ($data as $i => $message) {

                Notification::widget(['type' => $type, 'message' => $message, 'options' => ($this->options) ? Json::decode($this->options) : []]);

            }

            $session->removeFlash($type);
        }
    }
}