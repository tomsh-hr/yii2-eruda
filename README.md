Console for Mobile Browsers based on Eruda.

## More info & Demo

[Visit](https://github.com/liriliri/eruda) Eruda github site.

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require tomsh-hr/yii2-eruda
```

or add

```
"tomsh-hr/eruda": "*"
```

to the require section of your composer.json.

## Usage

Put this code in your main template:
```
<?php tomsh\eruda\Eruda::widget(); ?>
```

## Configuration

To configure eruda js put options in clientOptions like this:
```
<?php tomsh\eruda\Eruda::widget([
    'clientOptions' => [
        'container' => 'erudaElement', // ID of an element (this is not same as in eruda configuration)
        'tool' => ['console', 'elements']
    ]
]); ?>
```
NOTE: container configuration option accepts element id and not js object like in eruda original configuration.
For other configuration options [visit eruda documentation](https://github.com/liriliri/eruda/blob/master/doc/API.md).
