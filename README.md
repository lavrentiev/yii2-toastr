Yii2 - Javascript Toast Notifications
=====================================
Simple javascript toast notifications - Javascript library for non-blocking notifications. jQuery is required. The goal is to create a simple core library that can be customized and extended.

[![Latest Stable Version](https://poser.pugx.org/lavrentiev/yii2-toastr/v/stable)](https://packagist.org/packages/lavrentiev/yii2-toastr) [![Total Downloads](https://poser.pugx.org/lavrentiev/yii2-toastr/downloads)](https://packagist.org/packages/lavrentiev/yii2-toastr) [![Latest Unstable Version](https://poser.pugx.org/lavrentiev/yii2-toastr/v/unstable)](https://packagist.org/packages/lavrentiev/yii2-toastr) [![License](https://poser.pugx.org/lavrentiev/yii2-toastr/license)](https://packagist.org/packages/lavrentiev/yii2-toastr)

Установка
---------
Расширение устанавливается с помощью Composer интсрукция по установке [Composer](http://getcomposer.org/doc/00-intro.md#installation-nix)

Требуемые зависимости для расширения [Yii PHP Framework Version 2](https://github.com/yiisoft/yii2) >= `2.0.3` и [Toastr by CodeSeven](https://github.com/CodeSeven/toastr) = `v2.1.1`

Установка расширения через Composer, выполнить следующую команду:

```
php composer.phar require --prefer-dist lavrentiev/yii2-toastr "1.0.1"
```

или внести изменения в секцию `require` в `composer.json` и выполнить `composer update`

```
"lavrentiev/yii2-toastr": "1.0.1"
```

Допустимые параметры
---------------------
|Параметр|Значение по умолчанию|Допустимые значения|Описание
|-------------|-----------|-----------|-----------|
|type|`info`|`info`, `error`, `success`, `warning`|Тип уведомления|
|title|`Toast Notifications`|---|Заголовок уведомления|
|message|`Simple javascript toast notifications`|---|Текст уведомления|
|options|`[]`|[Подробней...](https://github.com/CodeSeven/toastr)|Дополнительные опции|
|clear|`false`|`true`, `false`|Позволяет убрать с экрана уведомления, показанные до вызова уведомления с этим параметром. |

Использование Toastr::widgets()
-------------------------------
```php
\lavrentiev\yii2toastr\Toastr::widget(
    [
        'type' => 'success',
        'title' => 'Toast Notifications',
        'message' => 'Simple javascript toast notifications',
        'clear' => false,
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
    ]
);
```

Использование ToastrFlash::widgets()
------------------------------------
Объявляем стандартные настройки уведомлений для `ToastrFlash`.
```php
\lavrentiev\yii2toastr\ToastrFlash::widget();
```
Объявляем собственные настройки уведомлений для `ToastrFlash`.
```php
\lavrentiev\yii2toastr\ToastrFlash::widget(
    [
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
    ]
);
```
Простое использование `ToastrFlash`.
```php
\Yii::$app->session->setFlash('success', [
    'title' => 'Toast Notifications', 
    'message' => 'Simple javascript toast notifications'
]);
```
Использование `ToastrFlash` объявляем собственные настройки для уведомления.
```php
\Yii::$app->session->setFlash('success', [
    'title' => 'Toast Notifications',
    'message' => 'Simple javascript toast notifications',
    'clear' => false,
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
Демонстрация
-------------
* Demo can be found at http://codeseven.github.io/toastr/demo.html

Дополнительно
-------------
* [Toastr by CodeSeven](https://github.com/CodeSeven/toastr)
* [Yii PHP Framework Version 2](https://github.com/yiisoft/yii2)