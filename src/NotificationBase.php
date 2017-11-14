<?php

namespace lavrentiev\widgets\toastr;

use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Json;

class NotificationBase extends Widget
{
    /** @var string $title */
    public $title;

    /** @var string $message */
    public $message;

    public $messageType = self::MESSAGE_TYPE_TEXT;

    /** @var string $message */
    public $messageDefault = 'This is the message';

    /** @var string $type */
    public $type;

    /** @var array $types */
    public $types = ['info', 'error', 'success', 'warning'];

    /** @var string $typeDefault */
    public $typeDefault = self::TYPE_INFO;

    /** @var array $options */
    public $options = [];

    const MESSAGE_TYPE_TEXT = 'text';
    const MESSAGE_TYPE_RAW = 'raw';

    const TYPE_INFO = 'info';
    const TYPE_ERROR = 'error';
    const TYPE_SUCCESS = 'success';
    const TYPE_WARNING = 'warning';

    const POSITION_TOP_RIGHT = 'toast-top-right';
    const POSITION_TOP_LEFT = 'toast-top-left';
    const POSITION_TOP_CENTER = 'toast-top-center';
    const POSITION_TOP_FULL_WIDTH = 'toast-top-full-width';

    const POSITION_BOTTOM_RIGHT = 'toast-bottom-right';
    const POSITION_BOTTOM_LEFT = 'toast-bottom-left';
    const POSITION_BOTTOM_CENTER = 'toast-bottom-center';
    const POSITION_BOTTOM_FULL_WIDTH = 'toast-bottom-full-width';

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->view->registerAssetBundle(ToastrAsset::className());

        $this->title = is_string($this->title) ? Html::encode($this->title) : null;

        $this->message = ($this->message) ? $this->message : $this->messageDefault;

        switch ($this->messageType){
            case self::MESSAGE_TYPE_RAW:
                $this->message = str_replace('"','\"', $this->message);
                break;
            case self::MESSAGE_TYPE_TEXT:
                $this->message = Html::encode($this->message);
                break;
        }

        $this->options = is_array($this->options) ?
            Json::encode($this->options) : Json::encode([]);
    }
}
