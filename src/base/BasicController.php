<?php

namespace haqqi\chopper\base;

use haqqi\chopper\Chopper;
use yii\web\Controller;

class BasicController extends Controller
{
    public $layout = '@haqqi/chopper/views/layouts/' . Chopper::LAYOUT_BASE;

    public function beforeAction($action)
    {
        Chopper::getComponent()->registerThemeAsset($this->view);
        
        $this->view->registerLinkTag([
            'rel' => 'icon',
            'type' => 'image/png',
            'href' => Chopper::getComponent()->getAssetUrl('img/logo-small.png')
        ], 'favicon');
        
        return parent::beforeAction($action); // TODO: Change the autogenerated stub
    }
}
