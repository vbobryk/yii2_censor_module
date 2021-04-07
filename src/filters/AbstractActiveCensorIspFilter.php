<?php


namespace CensorService\filters;

use CensorService\models\mysql\CensorIsp;

/**
 * Class AbstractCensorIspFilter
 * @package CensorService\filters
 */
abstract class AbstractActiveCensorIspFilter extends ActiveCensorFilter
{
    /**
     * @var string|null
     */
    protected $isp = null;

    /**
     * @param \yii\base\Action $action
     * @return bool
     */
    public function beforeAction($action)
    {
        $hash = crc32($this->getIsp());
        $model = CensorIsp::findOne(['crc32_hash' => $hash]);
        if (!empty($model)) {
            $this->getHandler()->handle(\Yii::$app->getRequest(), $model);
        }
        return true;
    }

    /**
     * @return null|string
     */
    abstract public function getIsp(): ?string;
}