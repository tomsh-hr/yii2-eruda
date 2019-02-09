<?php

namespace tomsh\eruda;

use yii\web\AssetBundle;

/**
 * ErudaAsset bundle
 *
 * @author Tomislav Sismanovic <t.sismanovic@gmail.com>
 *
 * @since 0.0.1
 */
class ErudaAsset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@npm/eruda';

    /**
     * @var array
     */
    public $js = [
        'eruda.min.js',
    ];
}
