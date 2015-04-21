<?php
/**
 * @copyright Copyright (c) 2006, 2015 Eugene Lavrentiev (RyanTedder)
 * @email lavrentiev.e@gmail.com
 */
namespace lavrentiev\yii2toastr;

use yii;
use lavrentiev\yii2toastr\assets\ToastrAsset;
/**
 * Class Toastr
 * @package lavrentiev\yii2toastr
 */
class Toastr extends \yii\base\Widget
{
    /**
     * Title Notifications
     */
    public $title = 'Toast Notifications';

    /**
     * Message Notifications
     */
    public $message = 'Simple javascript toast notifications';

    /**
     * Default Type Notifications
     */
    public $type = 'info';

    /**
     * All Type Notifications
     */
    public $typeAlert = [
        'info'   => 'info',
        'error'   => 'error',
        'success' => 'success',
        'warning' => 'warning'
    ];

    /**
     * Options Notifications
     */
    public $options = [];

    /**
     * Clear Previous Notifications
     */
    public $clear = false;

    /**
     * Initialization Widgets
     */
    public function init()
    {
        $this->options = ($this->options) ? ', '. json_encode($this->options) : '';

        ToastrAsset::register($this->getView());

        if ($this->clear)
            $this->clearNotification();

        $this->executeNotification();
    }

    /**
     * Clear Previous Notifications
     */
    protected function clearNotification()
    {
        $view = $this->getView();
        $view->registerJs("toastr.clear();");
    }

    /**
     * Execute Notification
     */
    protected function executeNotification()
    {
        $view = $this->getView();

        switch($this->type){

            case "info" :
                $notification = "toastr.info(\"{$this->message}\", \"{$this->title}\"{$this->options});";
                break;

            case "error" :
                $notification = "toastr.error(\"{$this->message}\", \"{$this->title}\"{$this->options});";
                break;

            case "success" :
                $notification = "toastr.success(\"{$this->message}\", \"{$this->title}\"{$this->options});";
                break;

            case "warning" :
                $notification = "toastr.warning(\"{$this->message}\", \"{$this->title}\"{$this->options});";
                break;

            default :
                $notification = "toastr.{$this->type}(\"{$this->message}\", \"{$this->title}\"{$this->options});";

        }

        $view->registerJs($notification);
    }

}