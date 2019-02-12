<?php

namespace tomsh\eruda;

use Yii;
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
     * @var bool
     */
    public $onlyByUrl = false;

    /**
     * @var string
     */
    public $urlGetter = 'eruda';

    /**
     * @var bool
     */
    public $onlyInDev = false;

    /**
     * Executes the widget.
     */
    public function run()
    {
        if($this->onlyByUrl) {
            $request = Yii::$app->request;
            $erudaUrl = $request->get($this->urlGetter);
            if($erudaUrl !== 'true') {
                return;
            }
        }

        if($this->onlyInDev === true && !YII_ENV_DEV) {
            return;
        }

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
