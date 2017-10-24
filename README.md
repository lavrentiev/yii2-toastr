Yii2 - Javascript Toast Notifications
=====================================

Simple javascript toast notifications - Javascript library for non-blocking notifications. jQuery is required. The goal is to create a simple core library that can be customized and extended.

[![Latest Stable Version](https://poser.pugx.org/lavrentiev/yii2-toastr/v/stable)](https://packagist.org/packages/lavrentiev/yii2-toastr) [![Total Downloads](https://poser.pugx.org/lavrentiev/yii2-toastr/downloads)](https://packagist.org/packages/lavrentiev/yii2-toastr) [![Latest Unstable Version](https://poser.pugx.org/lavrentiev/yii2-toastr/v/unstable)](https://packagist.org/packages/lavrentiev/yii2-toastr) [![License](https://poser.pugx.org/lavrentiev/yii2-toastr/license)](https://packagist.org/packages/lavrentiev/yii2-toastr)

Установка
---------
Расширение устанавливается с помощью Composer интсрукция по установке [Composer](http://getcomposer.org/doc/00-intro.md#installation-nix)

Установка расширения через Composer, выполнить следующую команду:
```
composer require --prefer-dist lavrentiev/yii2-toastr
```
или (master)
```
composer require --prefer-dist lavrentiev/yii2-toastr "dev-master"
```
или внести изменения в секцию `require` в `composer.json` и выполнить `composer update`
```
"lavrentiev/yii2-toastr": "^2.0"
```
или (master)
```
"lavrentiev/yii2-toastr": "dev-master"
```

### Уведомления Notification::widget()

![alt text](https://raw.githubusercontent.com/lavrentiev/yii2-toastr/master/screenshot/screenshot-1-2.png "Уведомления Notification::widget()")

```php
use lavrentiev\widgets\toastr\Notification;

Notification::widget([
    'type' => 'info',
    'title' => 'Toast Notifications',
    'message' => 'Simple javascript toast notifications'
]);

Notification::widget([
    'type' => 'error',
    'title' => 'Toast Notifications',
    'message' => 'Simple javascript toast notifications'
]);

Notification::widget([
    'type' => 'success',
    'title' => 'Toast Notifications',
    'message' => 'Simple javascript toast notifications'
]);

Notification::widget([
    'type' => 'warning',
    'title' => 'Toast Notifications',
    'message' => 'Simple javascript toast notifications'
]);

Notification::widget([
    'type' => 'info',
    'message' => 'Simple javascript toast notifications'
]);

Notification::widget([
    'type' => 'error',
    'message' => 'Simple javascript toast notifications'
]);

Notification::widget([
    'type' => 'success',
    'message' => 'Simple javascript toast notifications'
]);

Notification::widget([
    'type' => 'warning',
    'message' => 'Simple javascript toast notifications'
]);
```
Также присутствует возможность настройки произвольного уведомления, по параметрам предусмотренным разработчиками [Toastr by CodeSeven](https://github.com/CodeSeven/toastr)

![alt text](https://raw.githubusercontent.com/lavrentiev/yii2-toastr/master/screenshot/screenshot-3.png "Уведомления Notification::widget()")
```php
Notification::widget([
    'type' => Notification::TYPE_ERROR,
    'title' => 'Toast Notifications',
    'message' => 'Simple javascript toast notifications',
    'options' => [
        "closeButton" => false,
        "debug" => false,
        "newestOnTop" => false,
        "progressBar" => false,
        "positionClass" => Notification::POSITION_TOP_RIGHT,
        "preventDuplicates" => false,
        "onclick" => null,
        "showDuration" => "300",
        "hideDuration" => "1000",
        "timeOut" => "5000",
        "extendedTimeOut" => "1000",
        "showEasing" => "swing",
        "hideEasing" => "linear",
        "showMethod" => "fadeIn",
        "hideMethod" => "fadeOut"
    ]
]);
```

### Уведомления NotificationFlash::widget()

Подключение осуществляеться глобально допустим в layouts проекта.

```php
<?= \lavrentiev\widgets\toastr\NotificationFlash::widget() ?>
```

Также присутствует возможность настройки уведомлений, по параметрам предусмотренным разработчиками [Toastr by CodeSeven](https://github.com/CodeSeven/toastr)

```php
<?= \lavrentiev\widgets\toastr\NotificationFlash::widget([
    'options' => [
        "closeButton" => true,
        "debug" => false,
        "newestOnTop" => false,
        "progressBar" => false,
        "positionClass" => \lavrentiev\widgets\toastr\NotificationFlash::POSITION_TOP_RIGHT,
        "preventDuplicates" => false,
        "onclick" => null,
        "showDuration" => "300",
        "hideDuration" => "1000",
        "timeOut" => "5000",
        "extendedTimeOut" => "1000",
        "showEasing" => "swing",
        "hideEasing" => "linear",
        "showMethod" => "fadeIn",
        "hideMethod" => "fadeOut"
    ]
]) ?>
```

![alt text](https://raw.githubusercontent.com/lavrentiev/yii2-toastr/master/screenshot/screenshot-4.png "Уведомления NotificationFlash::widget()")

```php
\Yii::$app->session->setFlash('error', 'This is the message');
\Yii::$app->session->setFlash('success', 'This is the message');
\Yii::$app->session->setFlash('info', 'This is the message');
\Yii::$app->session->setFlash('warning', 'This is the message');
```

![alt text](https://raw.githubusercontent.com/lavrentiev/yii2-toastr/master/screenshot/screenshot-5.png "Уведомления NotificationFlash::widget()")

```php
\Yii::$app->session->setFlash('warning', ['Error 1', 'Error 2', 'Error 3']);
\Yii::$app->session->setFlash('success', ['Error 1', 'Error 2', 'Error 3']);
```

Допустимые параметры
---------------------
|Параметр|Значение по умолчанию|Допустимые значения|Описание
|-------------|-----------|-----------|-----------|
|type|`info`|`info`, `error`, `success`, `warning`|Тип уведомления|
|title|---|---|Заголовок уведомления|
|message|`Simple javascript toast notifications`|---|Текст уведомления|
|options|`[]`|[Подробней...](https://github.com/CodeSeven/toastr)|Дополнительные опции|

**Допустимые константы типов:**
```
TYPE_INFO = 'info'
TYPE_ERROR = 'error'
TYPE_SUCCESS = 'success'
TYPE_WARNING = 'warning'
```

**Допустимые константы положения:**
```
POSITION_TOP_RIGHT = 'toast-top-right';
POSITION_TOP_LEFT = 'toast-top-left';
POSITION_TOP_CENTER = 'toast-top-center';
POSITION_TOP_FULL_WIDTH = 'toast-top-full-width';

POSITION_BOTTOM_RIGHT = 'toast-bottom-right';
POSITION_BOTTOM_LEFT = 'toast-bottom-left';
POSITION_BOTTOM_CENTER = 'toast-bottom-center';
POSITION_BOTTOM_FULL_WIDTH = 'toast-bottom-full-width';
```


Демонстрация
-------------
* Demo can be found at http://codeseven.github.io/toastr/demo.html

Дополнительно
-------------
* [Toastr by CodeSeven](https://github.com/CodeSeven/toastr)
* [Yii PHP Framework Version 2](https://github.com/yiisoft/yii2)
