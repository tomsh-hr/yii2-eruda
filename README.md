Console for Mobile Browsers based on Eruda.

## More info & Demo

[Visit](https://github.com/liriliri/eruda) Eruda github site.

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require "tomsh-hr/yii2-eruda:*"
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
    ],
    'onlyByUrl' => false, // Optional, default true
    'urlGetter' => 'eruda', // Optional, default 'eruda'
    'onlyInDev' => false // Optional, default false
]); ?>
```
NOTE: container configuration option accepts element id and not js object like in eruda original configuration.
For other configuration options [visit eruda documentation](https://github.com/liriliri/eruda/blob/master/doc/API.md).

### Widget options

|Name             |Type        |Desc                                                                                     |
|-----------------|------------|-----------------------------------------------------------------------------------------|
|onlyByUrl        |boolean     |Load eruda script when url parameter is passed. Example http://domain/?eruda=true        |
|urlGetter        |string      |Url parameter to look. Default 'eruda'                                                   |
|onlyInDev        |boolean     |Load eruda only in development environment                                               |

onlyByUrl (default: false)
--------------------------
The JavaScript file size is quite huge(about 100kb gzipped) and therefore not suitable to include in mobile pages. It's recommended to load eruda only when eruda is set to true on url(http://domain?eruda=true).
Set this to true if you want to load script when url parameter is passed.

urlGetter (default: 'eruda')
----------------------------
Change url parameter to look for. Ex. put 'console' and than go to url(http://domain?console=true)

onlyInDev (default: false)
--------------------------
If you set this to true eruda script will be loaded only in development environment.
