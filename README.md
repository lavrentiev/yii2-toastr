Yii2 - Javascript Toast Notifications
=====================================

Simple javascript toast notifications - Javascript library for non-blocking notifications. jQuery is required. The goal is to create a simple core library that can be customized and extended.

[![Latest Stable Version](https://poser.pugx.org/lavrentiev/yii2-toastr/v/stable)](https://packagist.org/packages/lavrentiev/yii2-toastr) [![Total Downloads](https://poser.pugx.org/lavrentiev/yii2-toastr/downloads)](https://packagist.org/packages/lavrentiev/yii2-toastr) [![Latest Unstable Version](https://poser.pugx.org/lavrentiev/yii2-toastr/v/unstable)](https://packagist.org/packages/lavrentiev/yii2-toastr) [![License](https://poser.pugx.org/lavrentiev/yii2-toastr/license)](https://packagist.org/packages/lavrentiev/yii2-toastr)

Установка
---------
Расширение устанавливается с помощью Composer интсрукция по установке [Composer](http://getcomposer.org/doc/00-intro.md#installation-nix)

**Требуемые зависимости для расширения:**
- [Yii PHP Framework Version 2](https://github.com/yiisoft/yii2) >= `2.0.6`
- [Toastr by CodeSeven](https://github.com/CodeSeven/toastr) = `v2.1.1`
- [PHP](http://php.net/downloads.php) >= `5.4.0`

Установка расширения через Composer, выполнить следующую команду:

```
php composer.phar require --prefer-dist lavrentiev/yii2-toastr "2.0.0"
```
или (master)
```
php composer.phar require --prefer-dist lavrentiev/yii2-toastr "dev-master"
```

или внести изменения в секцию `require` в `composer.json` и выполнить `composer update`

```
"lavrentiev/yii2-toastr": "2.0.0"
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
    'type' => 'error',
    'title' => 'Toast Notifications',
    'message' => 'Simple javascript toast notifications',
    'options' => [
        "closeButton" => false,
        "debug" => false,
        "newestOnTop" => false,
        "progressBar" => false,
        "positionClass" => "toast-top-right",
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
            "closeButton" => false,
            "debug" => false,
            "newestOnTop" => false,
            "progressBar" => false,
            "positionClass" => "toast-top-right",
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

Демонстрация
-------------
* Demo can be found at http://codeseven.github.io/toastr/demo.html

Дополнительно
-------------
* [Toastr by CodeSeven](https://github.com/CodeSeven/toastr)
* [Yii PHP Framework Version 2](https://github.com/yiisoft/yii2)

### Chat Room on Gitter

@lavrentiev has just created a chat room. You can visit it here: [https://gitter.im/lavrentiev/yii2-toastr](https://gitter.im/lavrentiev/yii2-toastr).

[![Gitter](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/lavrentiev/yii2-toastr)
