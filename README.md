#Yii2 Places input widget

##Description
A [Yii2 input widget](http://www.yiiframework.com/doc-2.0/yii-widgets-inputwidget.html) which provides a user-friendly interface for selecting geographical coordinates via [Google maps](https://www.google.com/maps/preview). 

The widget is [composer](https://getcomposer.org/)-enabled. You can aquire the latest available version from the [packagist repository](https://packagist.org/packages/devypt/yii2-places-input-widget).

##Demo
A simple widget demo is available [here](http://devypt.com/yii2-places-input-widget/). You may inspect the hidden input value via some web-developer tool (e.g. [Firebug](https://addons.mozilla.org/ru/firefox/addon/firebug/)) to see how geographical coordinates are represented inside the widget.

##Usage examples

###Minimal example
All widget parameters are optional, have some sensible default values and may not be configured.
~~~php
echo $form->field($model, 'coordinates')->widget('devypt\yii2\widgets\PlacesInputWidget');
~~~

###Extended example
An exhaustive list of widget parameters (which are not derived from [yii\widgets\InputWidget](http://www.yiiframework.com/doc-2.0/yii-widgets-inputwidget.html)) available for configuration is described in the following example.
~~~php
echo $form->field($model, 'coordinates')->widget(
    'devypt\yii2\widgets\PlacesInputWidget',
    [

        // Google maps browser key.
        'key' => $key,

        // Initial map center latitude. Used only when the input has no value.
        // Otherwise the input value latitude will be used as map center.
        // Defaults to 0.
        'latitude' => 42,

        // Initial map center longitude. Used only when the input has no value.
        // Otherwise the input value longitude will be used as map center.
        // Defaults to 0.
        'longitude' => 42,

    ]
);
~~~
