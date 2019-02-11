<?php

namespace tomsh\eruda;

use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Json;

/**
 * Yii2 wrapper for Eruda plugin.
 *
 * @author Tomislav Sismanovic <t.sismanovic@gmx.com>
 *
 * @since 0.0.1
 */
class Eruda extends Widget
{
	/**
     * @var array
     */
    public $clientOptions = [];

    /**
     * Executes the widget.
     */
    public function run()
    {
        $this->registerAssets();
    }

    /**
     * Register assets
     */
    protected function registerAssets()
    {
        $view = $this->getView();
        ErudaAsset::register($view);
        $js = $this->getClientScript();
        $view->registerJs($js, $view::POS_END);
    }

    /**
     * @return string
     */
    public function getClientScript()
    {	
        $erudaScript = 'eruda.init(' . Json::encode($this->clientOptions) . ');';
        return $erudaScript;
    }
}
