<?php
/**
 * Created by PhpStorm.
 * User: diduk
 * Date: 03.10.2018
 * Time: 12:05
 */

namespace CensorService;


use yii\base\Module;

class CensorModule extends Module
{
    public $controllerNamespace = 'CensorService\controllers';

    public function init()
    {
        parent::init();
    }
}